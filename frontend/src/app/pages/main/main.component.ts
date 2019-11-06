import { Component } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { FormBuilder, FormGroup, FormControl, Validators } from '@angular/forms';
import { Router } from '@angular/router';
import { TagsService } from 'src/app/services/tags.service';

@Component({
  selector: 'app-main',
  templateUrl: './main.component.html',
  styleUrls: ['./main.component.css']
})
export class MainComponent {

  API_ENDPOINT = 'http://localhost:8000/api';

  formNewTag: FormGroup;
  ministeries: any = [];
  tags: any = [];
  tagDemand: number;

  constructor( public formBuilder: FormBuilder,
               private httpClient: HttpClient,
               private router: Router,
               private tagsService: TagsService ) {
                 this.httpClient.get(this.API_ENDPOINT + '/ministery').subscribe((data:any) => {
                   this.ministeries = data;
                 });
    this.formNewTag = formBuilder.group({
     'ministery': new FormControl('', Validators.required),
     'tag': new FormControl('', Validators.required),
     'email': new FormControl('', Validators.required)
    });
  }

  getTags(){
    this.tags = [];
    this.httpClient.get(this.API_ENDPOINT + '/tag/ministery/' + this.formNewTag.value.ministery.id).subscribe((data:any) => {
      for (let tag of data) {
          this.tags.push(tag.name);
      }
    })
  }

  createDemand(){
    this.tagsService.saveTag({'name': this.formNewTag.value.tag, 'ministery_id': this.formNewTag.value.ministery.id}).subscribe((data:any) => {
      this.tagDemand = data.id;
      this.tagsService.saveDemand({'email': this.formNewTag.value.tag, 'tag_id': this.tagDemand});
    });
    this.router.navigateByUrl('/demandas');
  }
}
