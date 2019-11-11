import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { MainComponent } from './pages/main/main.component';

const app_routes: Routes = [
  { path: 'inicio', component: MainComponent },
  { path: '**', pathMatch: 'full', redirectTo: 'inicio' },
]

@NgModule({
  imports: [
    RouterModule.forRoot(app_routes)
  ],
  exports: [
    RouterModule
  ]
})
export class AppRoutingModule {

}
