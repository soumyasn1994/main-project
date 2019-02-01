import { Component, OnInit } from '@angular/core';
import { checkAndUpdateBinding } from '@angular/core/src/view/util';

@Component({
  selector: 'app-profiles',
  templateUrl: './profiles.component.html',
  styleUrls: ['./profiles.component.css']
})
export class ProfilesComponent implements OnInit {
  
user:any;
check:boolean=true;
  constructor() 
  {
    this.user=
    {
      name:'soumya s nair',
      job:'mca',
      address:'rosevilla 123 kply kottyam 252512',
       phone:
      []
    };
  }
togglecheck(){
  this.check=!this.check;
}
  ngOnInit() {
  }

}
