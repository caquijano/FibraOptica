import React, {Component} from 'react';
import ReactDOM, { render } from 'react-dom';
import  {servicios} from './servicios.json';
import OportunidadForm from './OportunidadForm';

import FactibilidadModal from './FactibilidadModal';
import ElectrificadoraModal from './ElectrificadoraModal'
import EquiposModal from './EquiposModal';
import InstalacionModal from './InstalacionModal';
import AprovisionamientoModal from './AprovisionamientoModal';


class Example extends Component {
    constructor(){
        super();
        this.state ={
            servicios
        }
        
    }
    render(){
        const servicios =this.state.servicios.map((servicio,i) => {
            return(
                <div className="card">
                    {servicio.medio}

                </div>
            )

        })
        return (
            <div className="Example">
                <OportunidadForm
                servicios= {this.state.servicios}
                />
               
           <ul class="list-group list-group-horizontal-md">
   
                <button type="button" className="btn list-group-item"  data-toggle="modal" data-target="#factibilidad"> Factibilidad</button>
               
                <button type="button" className="btn list-group-item"  data-toggle="modal" data-target="#electrificadora"> Electrificadora</button>
                <button type="button" className="btn list-group-item"  data-toggle="modal" data-target="#equipos"> Equipos</button>
                <button type="button" className="btn list-group-item"  data-toggle="modal" data-target="#instalacion"> Instalacion</button>
                <button type="button" className="btn list-group-item"  data-toggle="modal" data-target="#aprovisionamiento"> Aprovisionamiento</button>

            </ul>
            <FactibilidadModal/>
            <ElectrificadoraModal/>
            <EquiposModal/>
            <InstalacionModal/>
            <AprovisionamientoModal/>
            
              


        
    
            </div>
        );
    }
    
}

export default Example;

if (document.getElementById('example')) {
    ReactDOM.render(<Example />, document.getElementById('example'));
}
