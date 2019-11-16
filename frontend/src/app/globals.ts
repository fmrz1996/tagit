import { Injectable } from '@angular/core';

@Injectable()
export class Globals {
  // Local:
  API_ENDPOINT: string = 'http://localhost:8000/api';
  
  // Production:
  // API_ENDPOINT: string = 'https://api.tagit.cl/api';
}
