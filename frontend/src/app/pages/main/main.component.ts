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
  API_ENDPOINT = 'http://localhost:8000/api';
  loading = true;

  formNewTag: FormGroup;
  ministeries: any = [];
  tags: any = [];
  list: any = [];
  demands: any = [];
  tagDemand: number;

  constructor( public formBuilder: FormBuilder,
               private httpClient: HttpClient,
               private tagsService: TagsService ) {
                 this.httpClient.get(this.API_ENDPOINT + '/ministery').subscribe((data:any) => {
                   this.ministeries = data;
                   this.formNewTag.controls.ministery.setValue(this.ministeries[0]);
                   this.getTags();
                 });
                 this.formNewTag = formBuilder.group({
                   'ministery': new FormControl('', Validators.required),
                   'tag': new FormControl('', Validators.required),
                   'email': new FormControl('', Validators.required)
                 });
  }

  getTags() {
    this.tags = [];
    this.httpClient.get(this.API_ENDPOINT + '/tag/ministery/' + this.formNewTag.value.ministery.id).subscribe((data:any) => {
      for (let tag of data) {
          this.tags.push(tag.name);
      }
      this.getDemands();
    })
  }

  getDemands(){
    this.loading = true;
    this.list = [];
    if (this.formNewTag.value.ministery.id == 0) {
      this.httpClient.get(this.API_ENDPOINT + '/demand').subscribe((data:any) => {
        this.demands = data;
        for (let item of this.demands) {
            this.list.push([item.name, (item.count * 20)]);
        }
        this.createCanvas();
      });
    } else {
      this.httpClient.get(this.API_ENDPOINT + '/demand/ministery/' + this.formNewTag.value.ministery.id).subscribe((data:any) => {
        this.demands = data;
        for (let item of this.demands) {
            this.list.push([item.name, (item.count * 20)]);
        }
        this.createCanvas();
      })
    }
    this.loading = false;
  }

  createDemand() {
    this.tagsService.saveTag({'name': this.formNewTag.value.tag, 'ministery_id': this.formNewTag.value.ministery.id}).subscribe((data:any) => {
      this.tagDemand = data.id;
      this.tagsService.saveDemand({'email': this.formNewTag.value.email, 'tag_id': this.tagDemand}).subscribe((data:any) => {
        console.log(data);
        this.myForm.resetForm();
      });
    });
  }

  createCanvas(){
    WordCloud(document.getElementById('my_canvas'), {
        list: this.list,
        gridSize: Math.round(16 * $('#my_canvas').width() / 700),
        weightFactor: function (size:number) {
          return Math.pow(size, 1.05) * $('#my_canvas').width() / 700;
        },
        rotateRatio: 0,
        fontFamily: 'Segoe Print'
    });
  }
}
