import React, { Component } from 'react'
import ReactDOM from 'react-dom/client';

import "../../../css/app.css"

export default class Home extends Component {
  render() {
    return (
    <div className='home' id='home'>
        home
    </div>
    )
  }
}

if (document.getElementById('home')) {
    const Index = ReactDOM.createRoot(document.getElementById("home"));

    Index.render(
        <React.StrictMode>
            <Home/>
        </React.StrictMode>
    )
}
