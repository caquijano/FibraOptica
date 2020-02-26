import React, {Component} from 'react';
import ReactDOM, { render } from 'react-dom';
import  {servicios} from './servicios.json';
import OportunidadForm from './OportunidadForm';

import FactibilidadModal from './FactibilidadModal';
import ElectrificadoraModal from './ElectrificadoraModal'
import EquiposModal from './EquiposModal';
import InstalacionModal from './InstalacionModal';
import AprovisionamientoModal from './AprovisionamientoModal';
import OportunidadList from './OportunidadList.js';

const baseUrl = "http://127.0.0.1:8000/api/";
class Example extends Component {
    constructor(props){
        super(props); 
        this.state ={
            //servicios
            servicios:[]
        };
        this.handleAddServicio = this.handleAddServicio.bind(this);
    }
    handleAddServicio(servicio){
        this.setState({
            servicios:[...this.state.servicios, servicio]
        })
    }
    componentDidMount(){

        axios.get(baseUrl+'servicio/list').then(response=>{
          this.setState({servicios:response.data})
        }).catch(error=>{
          alert("Error "+error)
        })
  
      }
  
    
    render(){

        return (
            <div className="Example">

                
                <OportunidadList onAddServicio={this.handleAddServicio}/>
                <div className="form-group">
                            < OportunidadForm
                            servicios= {this.state.servicios}
                            />
                    
                    
                 </div>
                <div className="form-group">
               
                    <ul className="list-group list-group-horizontal-md">
        
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
            </div>
        );
    }
    
}

export default Example;

if (document.getElementById('example')) {
    ReactDOM.render(<Example />, document.getElementById('example'));
}
