import { Injectable } from '@angular/core';
import { HttpClient, HttpHeaders } from '@angular/common/http';
import { Tag } from '../models/tag.model';
import { Demand } from '../models/demand.model';

@Injectable({
  providedIn: 'root'
})
export class TagsService {

  API_ENDPOINT = 'http://localhost:8000/api';
  headers = new HttpHeaders({'Content-Type': 'application/json'});

  constructor(private httpClient: HttpClient) { }

  saveTag(tag: Tag){
    return this.httpClient.post(this.API_ENDPOINT + '/tag', tag, {headers: this.headers});
  }

  saveDemand(demand: Demand){
    return this.httpClient.post(this.API_ENDPOINT + '/demand', demand, {headers: this.headers});
  }
}
