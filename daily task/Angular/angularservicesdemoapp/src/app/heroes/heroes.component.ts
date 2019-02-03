import { Component, OnInit } from '@angular/core';
import { Hero } from '../hero';
import { NgForm }  from '@angular/forms';
import { DemoService } from '../demo.service';

@Component({
  selector: 'app-heroes',
  templateUrl: './heroes.component.html',
  styleUrls: ['./heroes.component.css']
})
export class HeroesComponent implements OnInit {
  hero = new Hero();
  isRegistered = false;
  success:string;
  error:string;

  constructor(private service: DemoService) { 
    // service.alert();
  }
    

  ngOnInit() {
  }

  registration(f:NgForm){
    // alert(this.hero.username);
    this.service.store(this.hero).subscribe(data => {
      this.success = "Registered Successfully";
      this.isRegistered = true;
      console.log(this.success);
      f.reset();
    }, (err)=> {this.error = err; this.isRegistered = false});
  }

}
