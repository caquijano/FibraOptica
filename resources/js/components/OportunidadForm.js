import React from 'react'



const OportunidadForm = ({servicios}) => (
    
     
    <tbody className="container col-sm-11 align-content-center ">
        
        {servicios.map((servicio)=>(
         
           <div className="card">  
           <div className="row">
               <div className="col-sm-1">
                   <div className="row">
                        <img src="images/fibra.jpg" className="card-img-top" alt=""></img>
                        <span className="badge badge-danger navbar-badge">1</span>
                   </div>
                  <div className="row">
                      <button type="button" className="btn btn-success">Success</button>
                  </div>
                   
               </div>
               <div className="col-sm-3">
                 <h1 className="card-title">Cliente: Profamilia</h1>
                 <h4 className="card-text">Opotunidad: 20802 </h4>
               </div>
               <div className="col-sm-2">
                   <h5 className="card-text " >Sid: {servicio.sid} </h5>
                   <h5 className="card-text">Tipo: {servicio.tipo} </h5>
               </div>
               <div className="col-sm-3">
                    <h5 className="card-text">Ciudad: {servicio.ciudad}</h5>
                   <h5 className="card-text">Direccion: {servicio.direccion} </h5>
                   
               </div>
               
               <div className="col-sm-2">
                   <h5 className="card-text">Telefono: {servicio.telefono} </h5>
                    <h5 className="card-text"> BW: {servicio.bw} Medio:{servicio.medio}</h5>
               </div>
               <div className="col-sm-1 m-auto">
                    <button className="btn btn-info">Editar</button>
               </div>
               
           </div>
           <div className="progress">
           <div className="progress-bar" role="progressbar" style={{width: '0%'}} aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">50%</div>
   
           </div>
        
            
          
       </div>
       
        ))}
    
    </tbody>
    
    
 )
export default OportunidadForm