import { Component, OnInit, Input, Output, EventEmitter } from '@angular/core';


@Component({
  selector: 'app-student',
  templateUrl: './student.component.html',
  styleUrls: ['./student.component.css']
})
export class StudentComponent implements OnInit {
  @Input() rno:number;
  @Input() name:string;
  @Input() batch:string;
  @Input() img:string;
  @Input() dept:string;
  @Output() sendStud:EventEmitter<any>=new EventEmitter();
  selectStud(){
    let selectedstud:any={srno:this.rno,
   sname:this.name,
   sbatch:this.batch,
  sdept:this.dept};
   this.sendStud.emit(selectedstud);
    }

  constructor() { }

  ngOnInit() {
  }

}
