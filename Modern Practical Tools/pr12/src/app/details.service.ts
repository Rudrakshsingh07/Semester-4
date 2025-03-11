import { Injectable } from '@angular/core';

@Injectable({
  providedIn: 'root'
})

export class DetailsService {
  product_arr=[
    {
      pid:1,name:'TV',p_date:'31-4-2022',price:25000,photo:'assets/1.jpg'
    },
    {
      pid:2,name:'Fridge',p_date:'12-4-2022',price:30000,photo:'assets/2.jpg'
    },
    {
      pid:3,name:'Washing Machine',p_date:'13-4-2022',price:15000,photo:'assets/3.jpg'
    },
    {
      pid:4,name:'Television',p_date:'20-4-2022',price:20000,photo:'assets/4.jpg'
    },
    {
      pid:5,name:'TV(Samsung)',p_date:'6-4-2022',price:20000,photo:'assets/5.jpg'
    },
    {
      pid:6,name:'Fridge',p_date:'31-4-2022',price:25000,photo:'assets/6.jpg'
    },
  ];

  
  getProduct(){
    return this.product_arr;
  }
  getProductById(id:any){
    
    return this.product_arr.filter(product => product.pid == id);
  }
}
