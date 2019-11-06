import { Component, OnInit } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import * as WordCloud from 'wordcloud';
import * as $ from 'jquery';

@Component({
  selector: 'app-wordcloud',
  templateUrl: './wordcloud.component.html',
  styleUrls: ['./wordcloud.component.css']
})
export class WordcloudComponent implements OnInit {

  API_ENDPOINT = 'http://localhost:8000/api';
  ministeries: any = [];
  demands: any = [];
  selectedValue = "";
  list = [];

  constructor( private httpClient: HttpClient ) {
    this.httpClient.get(this.API_ENDPOINT + '/ministery').subscribe((data:any) => {
      this.ministeries = data;
    });
  }

  ngOnInit(){
    this.httpClient.get(this.API_ENDPOINT + '/demand').subscribe((data:any) => {
      this.demands = data;
      for (let item of this.demands) {
        this.list.push([item.name, (item.count * 20)]);
      }
      WordCloud(document.getElementById('my_canvas'), {
        list: this.list,
        gridSize: Math.round(16 * $('#my_canvas').width() / 700),
        weightFactor: function (size:number) {
          return Math.pow(size, 1.05) * $('#my_canvas').width() / 700;
        },
        rotateRatio: 0,
        fontFamily: 'Segoe Print'
      });
    });
  }

  getDemands(){
    this.list = [];
    if (this.selectedValue.length > 0) {
      this.httpClient.get(this.API_ENDPOINT + '/demand/ministery/' + this.selectedValue).subscribe((data:any) => {
        this.demands = data;
        for (let item of this.demands) {
            this.list.push([item.name, (item.count * 20)]);
        }
        this.createCanvas();
      })
    } else {
      this.httpClient.get(this.API_ENDPOINT + '/demand').subscribe((data:any) => {
        this.demands = data;
        for (let item of this.demands) {
            this.list.push([item.name, (item.count * 20)]);
        }
        this.createCanvas();
      });
    }
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
