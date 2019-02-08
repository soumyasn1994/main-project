import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-studentlist',
  templateUrl: './studentlist.component.html',
  styleUrls: ['./studentlist.component.css']
})
export class StudentlistComponent implements OnInit {
  public StudDetails:any=[
    {rno:"1",name:"Amal",batch:"comp", dept:"mca"},
    {rno:"2",name:"neenu",batch:"comp", dept:"mtech"},
    {rno:"3",name:"achu",batch:"comp", dept:"btech"}];
    selstud:any;
    addStud(data:any){
      this.selstud=data;
    }

  constructor() { }

  ngOnInit() {
  }

}
