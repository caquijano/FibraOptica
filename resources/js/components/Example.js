import React, {Component} from 'react';
import ReactDOM from 'react-dom';

import OportunidadForm from './OportunidadForm'

function Example() {
    return (
        <div className="container">
            <OportunidadForm/>
            <OportunidadForm/>  
           <OportunidadForm/>
           <OportunidadForm/>
        </div>
    );
}

export default Example;

if (document.getElementById('example')) {
    ReactDOM.render(<Example />, document.getElementById('example'));
}
