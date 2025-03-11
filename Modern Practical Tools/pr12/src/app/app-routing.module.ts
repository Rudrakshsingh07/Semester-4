import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { AppComponent } from './app.component';
import { ViewDetailsComponent } from './view-details/view-details.component';

const routes: Routes = [
  {path:'ViewDetails/:id',component:ViewDetailsComponent}
  
];


@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }

