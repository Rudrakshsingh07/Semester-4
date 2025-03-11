import { Routes } from '@angular/router';
import { ViewDetailsComponent } from './view-details/view-details.component';

export const routes: Routes = [
  { path: 'view-details/:id', component: ViewDetailsComponent }
];
