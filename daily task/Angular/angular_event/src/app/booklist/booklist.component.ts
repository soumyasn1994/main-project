import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-booklist',
  templateUrl: './booklist.component.html',

  styleUrls: ['./booklist.component.css']
})
export class BooklistComponent implements OnInit {
  public BookDetails:any=[
  {title:"Book 1",author:"Author 1",publisher:"Publisher 1"},
  {title:"Book 2",author:"Author 2",publisher:"Publisher 2"},
  {title:"Book 3",author:"Author 3",publisher:"Publisher 3"}];
  selbook:any;
  addBook(data:any){
    this.selbook=data;
}

  constructor() { }

  ngOnInit() {
  }

}
