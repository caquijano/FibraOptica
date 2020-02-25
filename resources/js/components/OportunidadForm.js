import React from 'react'

const OportunidadForm = () => (
    <div className="card" style={{width: '18rem:=;'}}>  
        <div className="row">
            <div className="col-sm-1">
                <img src="images/SinFoto.jpg" className="card-img-top" alt=""></img>
            </div>
            <div className="col-sm-3">
              <h1 className="card-title">Cliente: Profamilia</h1>
              <h4 className="card-text">Opotunidad: 20802 </h4>
            </div>
            <div className="col-sm-2">
                <h4 className="card-text">SID: 1151599 </h4>
                <h5 className="card-text">Tipo: Nuevo </h5>
            </div>
            <div className="col-sm-3">
                <h5 className="card-text">Ciudad: Bogota </h5>
                <h5 className="card-title">Direccion: Data Center Torre Central </h5>
                
            </div>
            
            <div className="col-sm-3">
                <h5 className="card-text">Telefono: 867 2122 </h5>
                <h5 className="card-text"> BW: 100 Mbps Medio: Fibra</h5>
            </div>
            
        </div>
        <div className="progress">
        <div className="progress-bar" role="progressbar" style={{width: '0%'}} aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">50%</div>

        </div>
     
        <ul class="list-group list-group-horizontal-md">

                <button className="list-group-item" type="button">Factibilidad</button>
            
            
                <button className="list-group-item" type="button">Electrificadora</button>
            
                <button className="list-group-item" type="button">Equipos</button>
           
                <button className="list-group-item" type="button">Instalacion</button>
            
                <button className="list-group-item" type="button">Aprovisionamiento</button>
            
        </ul>
                
         
       
    </div>
 )
export default OportunidadForm