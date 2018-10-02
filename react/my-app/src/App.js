import React from 'react';
import { Header } from './Header';
import { Siteflex } from './siteflex.js'

var names = ["Erik", "Per", "Støggen", "Ayylmaomoradi"];

var sites = ["chklst", "clcker", "cur", "daynight", "drop", "eksamen", "fj1svc", "omng", "p04", "p05", "pn", "primtall", "stopwatch", "teltet", "tentamen", "vdfls"];
var desc = ["A simple checklist site.", "A cookie clicker rip-off.", "A curling site.", "A simple day-night cycle demo.", "A site which gives you a random song drop and epilepsy.", "My exam from high school.", "A simple website to demonstrate some flexbox.", "A site to show you the optimal GPU for crypto mining.", "Project 4 from high school.", "Project 5 from high school.", "Make your phone number from prime numbers.", "A prime number factorization site.", "A shitty way to sign up with a password confimation.", "A shitty map of Teltet 2018 which didn't reflect real life at all.", "My mock-exam from high school.", "A simple demonstration of some js and video/audio editing skills."];
class App extends React.Component {
  render() {
    let spags = [];
    for (var i = 0; i < names.length; i++) {
      spags.push(
          <Header name={names[i]} key={i}/>
      )
    }
    let sts = [];
    for (var i = 0; i < sites.length; i++) {
      sts.push(
        <Siteflex site={sites[i]} key={i} desc={desc[i]}/>
      )
    }
    return (
      <React.Fragment>
        <div className="header">
          {spags}
        </div>
        <div className="flexcont">
          <h1>Project Sites</h1>
          {sts}
        </div>
      </React.Fragment>

    );
  }
}

export default App;
