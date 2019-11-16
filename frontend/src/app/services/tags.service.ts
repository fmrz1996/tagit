import { Injectable } from '@angular/core';
import { HttpClient, HttpHeaders } from '@angular/common/http';
import { Tag } from '../models/tag.model';
import { Demand } from '../models/demand.model';
import { Globals } from 'src/app/globals';

@Injectable({
  providedIn: 'root'
})
export class TagsService {

  headers = new HttpHeaders({'Content-Type': 'application/json'});

  constructor( private httpClient: HttpClient,
               public globals: Globals ) { }

  saveTag(tag: Tag){
    return this.httpClient.post(this.globals.API_ENDPOINT + '/tag', tag, {headers: this.headers});
  }

  saveDemand(demand: Demand){
    return this.httpClient.post(this.globals.API_ENDPOINT + '/demand', demand, {headers: this.headers});
  }
}
