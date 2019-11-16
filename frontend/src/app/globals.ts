import { Injectable } from '@angular/core';

@Injectable()
export class Globals {
  // LOCAL: Comentar Script de Google Analytics en index.html
  API_ENDPOINT: string = 'http://localhost:8000/api';

  // PRODUCTION: Descomentar Script de Google Analytics en index.html y reCaptcha
  // API_ENDPOINT: string = 'https://api.tagit.cl/api';
}
