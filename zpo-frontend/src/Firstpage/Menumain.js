import React, {Component} from 'react';
import ZPOT from './ZPOT.png';
import { faUser,faCog,faUserEdit } from "@fortawesome/free-solid-svg-icons";
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';

class Menumain extends Component {
    render(){
        return(
            <div className="mm1 bg-dark">
                {/* Menu Head */}
                <div className="mm2 mb-2">
                    <a className="mmr1" href="#"><img className="" src={ZPOT} width="40px" alt="logo"/></a>
                    <a className="mmr2" href="#">ZPOT Intranet</a>
                </div>
                <div className="mmb"></div>
                {/* Menu Body */}
                <div className="dropdown mb-2">
                    <a className="mm3" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span className="mmr1 mmr4">
                            <FontAwesomeIcon icon={faUser} />
                        </span>
                        <p className="mmr2 mmr5">Name And Surname</p>
                    </a>
                    <div className="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <a className="dropdown-item" href="#"><span className="mmdd"><FontAwesomeIcon icon={faUser} /></span> My Profile</a>
                        <a className="dropdown-item" href="#"><span className="mmdd"><FontAwesomeIcon icon={faUserEdit} /></span> Edit Profile</a>
                        <a className="dropdown-item" href="#"><span className="mmdd"><FontAwesomeIcon icon={faCog} /></span> Setting</a>
                    </div>
                </div>
                <div className="mmb"></div>
                <ul className="nav flex-column mm2">
                    <li className="nav-item">
                        <a className="nav-link mmr3" href="#" role="button" id="dropdownMenuLink" data-toggle="collapse" aria-haspopup="true" aria-expanded="false">
                            <span className="mmr1 mmr4">
                                <FontAwesomeIcon icon={faUser} />
                            </span>
                            <p className="mmr2 mmr5 mmr6">ZPOT Internet</p>
                        </a>
                        <ul >
                            
                        </ul>
                    </li>
                </ul>
            </div>
        )
    }
}

export default Menumain;