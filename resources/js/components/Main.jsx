import React from 'react';
import ReactDOM from 'react-dom/client';
import { BrowserRouter as Router, Route, Routes, Link } from 'react-router-dom';

import Header from './parts/Header'
import Home from './layouts/Home'
import Profile from './layouts/Profile'
import Footer from './parts/Footer'


function Main() {
    return (
        <Router>

            <Header/>

            <div className='main'>

                    <main>
                        <Routes>
                            <Route path="/" element={<Home />} />
                            <Route path="/profil" element={<Profile />} />
                        </Routes>
                    </main>


            </div>

            <Footer/>
        </Router>
    );
}

export default Main;

if (document.getElementById('main')) {
    const Index = ReactDOM.createRoot(document.getElementById("main"));

    Index.render(
        <React.StrictMode>
            <Main/>
        </React.StrictMode>
    )
}
