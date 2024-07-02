import React, { Component } from 'react'
import ReactDOM from 'react-dom/client';
import { NavLink } from 'react-router-dom';

import "../../../css/header.css"

export default class Header extends Component {
  render() {
    return (
    <div className='header'>
        <div id='header1'>
            <div className='container'>
                <div className='row'>

                <div className='col-10 news-update'>
                    <span className=''>News</span>
                </div>
                <div className='col times'>
                    <span className=''>10:10</span>

                </div>
                </div>
            </div>
        </div>


        <div className='container'>
            <div className='row'>
                <div className='col-5'>
                <a href="/" id='logo-name'>
                        <img src="img/logo.png" alt="" />
                        <span>SD YPKP 2 SENTANI</span>
                    </a>
                </div>

                <div className='col'>
                    <ul className="nav nav-header" id='nav-header'>
                        <li>
                            <NavLink to="/" className={({ isActive }) => (isActive ? 'active navBar' : 'navBar')}>
                                Home
                            </NavLink>
                        </li>
                        <li className='dropdown'>
                            <NavLink to="/profil" className={({ isActive }) => (isActive ? 'active navBar' : 'navBar')}>
                                Profil
                            </NavLink>
                            <div className="dropdown-content">
                                <div className='row'>
                                    <NavLink to="/about/team" className={({ isActive }) => (isActive ? 'active nav-link' : 'nav-link')}>
                                        Team
                                    </NavLink>
                                    <NavLink to="/about/company" className={({ isActive }) => (isActive ? 'active nav-link' : 'nav-link')}>
                                        Company
                                    </NavLink>
                                    <NavLink to="/about/company" className={({ isActive }) => (isActive ? 'active nav-link' : 'nav-link')}>
                                        Company
                                    </NavLink>
                                </div>
                                <div className='row'>
                                    <NavLink to="/about/company" className={({ isActive }) => (isActive ? 'active nav-link' : 'nav-link')}>
                                        Company
                                    </NavLink>
                                    <NavLink to="/about/company" className={({ isActive }) => (isActive ? 'active nav-link' : 'nav-link')}>
                                        Company
                                    </NavLink>
                                    <NavLink to="/about/company" className={({ isActive }) => (isActive ? 'active nav-link' : 'nav-link')}>
                                        Company
                                    </NavLink>
                                </div>
                                <div className='row'>
                                    <NavLink to="/about/company" className={({ isActive }) => (isActive ? 'active nav-link' : 'nav-link')}>
                                        Company
                                    </NavLink>
                                    <NavLink to="/about/company" className={({ isActive }) => (isActive ? 'active nav-link' : 'nav-link')}>
                                        Company
                                    </NavLink>
                                    <NavLink to="/about/company" className={({ isActive }) => (isActive ? 'active nav-link' : 'nav-link')}>
                                        Company
                                    </NavLink>
                                </div>


                            </div>
                        </li>
                        <li>
                            <NavLink to="/kesiswaan" className={({ isActive }) => (isActive ? 'active navBar' : 'navBar')}>
                                Kesiswaan
                            </NavLink>
                        </li>
                        <li>
                            <NavLink to="/berita" className={({ isActive }) => (isActive ? 'active navBar' : 'navBar')}>
                                Berita
                            </NavLink>
                        </li>
                        <li>
                            <NavLink to="/informasi" className={({ isActive }) => (isActive ? 'active navBar' : 'navBar')}>
                                Informasi
                            </NavLink>
                        </li>
                        <li>
                            <NavLink to="/galeri" className={({ isActive }) => (isActive ? 'active navBar' : 'navBar')}>
                                Galeri
                            </NavLink>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    )
  }
}

if (document.getElementById('header')) {
    const Index = ReactDOM.createRoot(document.getElementById("header"));

    Index.render(
        <React.StrictMode>
            <Header/>
        </React.StrictMode>
    )
}
