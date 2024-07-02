import React, { Component } from 'react'
import ReactDOM from 'react-dom/client';

import "../../../css/app.css"

export default class Profile extends Component {
  render() {
    return (
    <div className='profile' id='profile'>
        hello
    </div>
    )
  }
}

if (document.getElementById('profile')) {
    const Index = ReactDOM.createRoot(document.getElementById("profile"));

    Index.render(
        <React.StrictMode>
            <Profile/>
        </React.StrictMode>
    )
}
