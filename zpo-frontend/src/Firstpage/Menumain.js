import React, {Component} from 'react';
import ZPOT from './ZPOT.png';
import { faSignInAlt } from "@fortawesome/free-solid-svg-icons";
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';

class Menumain extends Component {
    render(){
        return(
            <div className="mm1 bg-dark">
                {/* Menu Head */}
                <div className="mm2">
                    <a className="mmr1" href="#"><img className="" src={ZPOT} width="40px" alt="logo"/></a>
                    <a className="mmr2">ZPOT Intranet</a>
                </div>
                {/* Menu Body */}
                <div className="">
                    <center>
                        <img src="" className="" alr="" />
                        <h5>Name SurName</h5>
                    </center>
                    <div></div>
                </div>
            </div>
        )
    }
}

export default Menumain;