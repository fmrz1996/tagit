// Requisitos:
// * Datos basicos de formulario salgan en un modal
// * Terminar de estilar como el mockup
// - Que el logo sea clickeable solo en la img
// - Cuando cambio de ministerio, en el panel de lista, el wordcloud se tiene que ver
// - Filtrar palabras ofensivas
// - Tomar demanda y hacer pancarta para compartir
// - Restricción por IP
// - Que el correo pueda tener un solo voto por ministerio
// - Hacer prueba con varios votos
// - Evitar que funcione el teclado con los select
import { Component, ViewChild } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { FormBuilder, FormGroup, FormControl, Validators, FormGroupDirective } from '@angular/forms';
import { TagsService } from 'src/app/services/tags.service';
import { SwalComponent } from '@sweetalert2/ngx-sweetalert2';
import * as WordCloud from 'wordcloud';
import * as $ from 'jquery';
@Component({
  selector: 'app-main',
  templateUrl: './main.component.html',
  styleUrls: ['./main.component.css']
})
export class MainComponent {

  @ViewChild('successSwal', {static: false}) private successSwal: SwalComponent;
  @ViewChild( FormGroupDirective, {static: false}) myForm: any;
  @ViewChild('auto', {static: false}) auto: any;
  // API_ENDPOINT = 'https://api.tagit.cl/api';
  API_ENDPOINT = 'http://localhost:8000/api';
  initialLoading = true;
  initialSelect = true;

  formMinistery: FormGroup;
  formNewTag: FormGroup;
  ministeries: any = [];
  ministeryUrl: string;
  regions: any = [];
  tags: any = [];
  tagsAutocomplete: any = [];
  list: any = [];
  demands: any = [];
  tagDemand: number;
  sumCount: number;
  sumRows: number;
  factorMultiple: number;

  constructor( public formBuilder: FormBuilder,
               private httpClient: HttpClient,
               private tagsService: TagsService ) {
                 this.httpClient.get(this.API_ENDPOINT + '/region').subscribe((data:any) => {
                   this.regions = data;
                 });
                 this.httpClient.get(this.API_ENDPOINT + '/ministery').subscribe((data:any) => {
                   this.ministeries = data;
                   this.formMinistery.controls.ministery.setValue(this.ministeries[0]);
                   this.getTags();
                 });
                 this.formMinistery = formBuilder.group({
                   'ministery': new FormControl('', Validators.required)
                 });
                 this.formNewTag = formBuilder.group({
                   'ministery': new FormControl('', Validators.required),
                   'region': new FormControl('', Validators.required),
                   'tag': new FormControl('', [Validators.required,
                                               Validators.minLength(10),
                                               Validators.maxLength(40)]),
                   'email': new FormControl('', [Validators.required,
                                                 Validators.pattern('[a-zA-Z0-9.-_]{1,}@[a-zA-Z.-]{2,}[.]{1}[a-zA-Z]{2,}')
                                               ]),
                    'recaptchaReactive': new FormControl('', Validators.required)
                 });
  }

  getTags() {
    if(!this.initialSelect) {
      $([document.documentElement, document.body]).animate({
        scrollTop: $("#ministery").offset().top - 40
      }, 400);
    }
    this.initialSelect = false;
    this.tags = [];
    $('#my_canvas').animate({ opacity: 0 }, 400);
    if (this.formMinistery.value.ministery.id === 1) {
      this.httpClient.get(this.API_ENDPOINT + '/tag').subscribe((data:any) => {
      for (let tag of data) {
          this.tags.push(tag.name);
      }
      this.getDemands();
      })
    } else {
      this.httpClient.get(this.API_ENDPOINT + '/tag/ministery/' + this.formMinistery.value.ministery.id).subscribe((data:any) => {
        for (let tag of data) {
          this.tags.push(tag.name);
        }
        this.getDemands();
      })
    }
  }

  getDemands() {
    this.list = [];
    this.sumCount = 0;
    this.sumRows = 0;
    if (this.formMinistery.value.ministery.id === 1) {
      this.httpClient.get(this.API_ENDPOINT + '/demand').subscribe((data:any) => {
        this.demands = data;
        for (let item of this.demands) {
          this.sumCount = this.sumCount + item.count;
        }
        for (let item of this.demands) {
          this.list.push([item.name, Math.round((item.count/this.sumCount) * 15)]);
        }
        this.createCanvas();
      });
    } else {
      this.httpClient.get(this.API_ENDPOINT + '/demand/ministery/' + this.formNewTag.value.ministery.id).subscribe((data:any) => {
        this.demands = data;
        for (let item of this.demands) {
          this.sumCount = this.sumCount + item.count;
          this.sumRows++;
        }
        if(this.sumRows == 1){
          this.factorMultiple = 15
        }
        if(this.sumRows == 2){
          this.factorMultiple = 25
        }
        if(this.sumRows == 3){
          this.factorMultiple = 30
        }
        if(this.sumRows == 4){
          this.factorMultiple = 55
        }
        if(this.sumRows == 5){
          this.factorMultiple = 65
        }
        if(this.sumRows == 6){
          this.factorMultiple = 75
        }
        if(this.sumRows == 7){
          this.factorMultiple = 85
        }
        if(this.sumRows == 8){
          this.factorMultiple = 85
        }
        if(this.sumRows == 9){
          this.factorMultiple = 90
        }
        if(this.sumRows == 10){
          this.factorMultiple = 95
        }
        for (let item of this.demands) {
            this.list.push([item.name, Math.round((item.count/this.sumCount) * this.factorMultiple)]);
        }
        this.createCanvas();
      })
    }
    this.initialLoading = false;
  }

  createDemand() {
    this.tagsService.saveTag({'name': this.formNewTag.value.tag, 'ministery_id': this.formNewTag.value.ministery.id}).subscribe((data:any) => {
      this.tagDemand = data.id;
      this.tagsService.saveDemand({'email': this.formNewTag.value.email, 'tag_id': this.tagDemand, 'region_id': this.formNewTag.value.region.id}).subscribe((_data:any) => {
        $('.modal').removeClass('in');
        $('.modal').attr("aria-hidden","true");
        $('.modal').css("display", "none");
        $('.modal-backdrop').remove();
        $('body').removeClass('modal-open');
        this.fireSuccessModal();
      });
    });
  }

  createCanvas() {
    const div = document.getElementById("word-cloud");
    const canvas = <HTMLCanvasElement>document.getElementById("my_canvas");
    canvas.height = div.offsetHeight;
    canvas.width  = div.offsetWidth;
    WordCloud(document.getElementById('my_canvas'), {
        list: this.list,
        gridSize: Math.round(8 * $('#my_canvas').width() / 700),
        weightFactor: function (size:number) {
          return Math.pow(size, 1) * $('#my_canvas').width() / 300;
        },
        rotateRatio: 0,
        fontFamily: 'Segoe Print',
        minSize: 8
    });
    $('#my_canvas').animate({ opacity: 1 }, 400);
  }

  getTagsAutocomplete() {
    this.tagsAutocomplete = [];
    this.httpClient.get(this.API_ENDPOINT + '/tag/ministery/' + this.formNewTag.value.ministery.id).subscribe((data:any) => {
      for (let tag of data) {
        this.tagsAutocomplete.push(tag.name);
      }
    })
  }

  fireSuccessModal() {
    this.getTags();
    this.formNewTag.controls['tag'].reset();
    this.formNewTag.controls['ministery'].reset();
    this.successSwal.fire()
    .then((result) => {
      if (result.value) {
        $([document.documentElement, document.body]).animate({
          scrollTop: $("#formNewTag").offset().top
        }, 400);
        $('#ministery').focus();
      } else {
        this.formNewTag.controls['email'].reset();
        this.formNewTag.controls['region'].reset();
        this.formNewTag.controls['ministery'].reset();
        $([document.documentElement, document.body]).animate({
          scrollTop: $("#infoMinistryTitle").offset().top
        }, 400);
      }
    });
  }

  onFocused(): void {
    this.auto.close();
  }

  onCleared(): void {
    this.auto.close();
  }
}
