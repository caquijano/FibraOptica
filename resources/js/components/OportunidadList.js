import React, {Component} from 'react';



class OportunidadList extends Component{

    constructor () {
        super();
        this.state = {
            sid: '',
            servicio:'internet',
            tipo: '',
            medio:'',
            bw:'',
            direccion: '',
            ciudad:'',
            telefono:'',
            descripcion:'',
            fecha_contratacion:'2020-02-26',//factibilidad
            fecha_proveedor:'2020-02-26',
            fecha_costos:'2020-02-26',
            tiempo_contrato:200,
            tercero:'carlos',
            os:'os',
            mrc_cliente:200,
            nrc_cliente:200,
            inversion_cliente:200,
            gasto_cliente:200,
            inversion_tercero:200,
            gasto_tercero:200,
            obra_civil:200,
            observacion_obra:'obra',
            fecha_entrega_tercero:'2020-02-26',
            id_oportunidad:1,
            id_suministro:1




        };
        this.handleInputChange = this.handleInputChange.bind(this);
        this.handleSubmit = this.handleSubmit.bind(this);
        
      }

    handleInputChange(e) {
        const{value,name} = e.target;
        this.setState({
            [name]: value

        })
        
      }
    handleSubmit(e){
        e.preventDefault();
        this.props.onAddServicio(this.state)
        
    }


    render(){
        return(
            <form className="container-sm p-3 my-3 border bg-dark" onSubmit={this.handleSubmit}>
                <div className="row">
                    <div className="row col-sm-11">
                        
                            <div className="form-group col-sm-2">
                                <img src="images/SinFoto.jpg" className="card-img-top" alt=""></img>
                                <span className="badge badge-danger navbar-badge">3</span>
                            </div>
                    
                            <div className="form-group col-sm-2">
                                <div className="row mt-4">
                                    <h5 className="">Profamilia</h5>
                                </div>
                                <div className="row">
                                    <h5 className="aling-text-center">Opotunidad: 20802 </h5>
                                </div>        
                            </div>

                            <div className="form-group col-sm-2">
                                <div className="row">
                                     <h5 className="card-title">SID: </h5>
                                    <input 
                                        type="text"
                                        name="sid" 
                                        className="form-control" 
                                        placeholder="SID" 
                                        onChange={this.handleInputChange}>
                                    </input>   
                                </div>
                                <div className="row">
                                    <h5 className="card-title">Tipo</h5>
                                    <input 
                                        type="" 
                                        name="tipo" 
                                        className="form-control" 
                                        placeholder="Tipo" 
                                        onChange={this.handleInputChange}>

                                    </input>
                                </div>
                            </div>       
                            

                            <div className="form-group col-sm-2 ml-1 ">
                                <div className="row">
                                 <h5 className="card-title">Ciudad</h5>
                                    <input
                                        type="text" 
                                        name="ciudad" 
                                        className="form-control"
                                        placeholder="Ciudad" 
                                        onChange={this.handleInputChange}>
                                    </input>
                                </div>
                                <div className="row">
                                     <h5 className="card-title">Direccion</h5>
                                    <input 
                                        type="text" 
                                        name="direccion" 
                                        className="form-control" 
                                        placeholder="Direccion" 
                                        onChange={this.handleInputChange}>

                                    </input>
                                </div>
                            </div>
                            
                            <div className="form-group col-sm-2">
                                <div className="row">
                                <h5 className="card-title">Telefono:</h5>
                                    <input 
                                        type="text" 
                                        name="telefono" 
                                        className="form-control" 
                                        placeholder="Telefono" 
                                        onChange={this.handleInputChange}>

                                    </input>
                                </div>
                                <div className="row mt">
                                    <div className="col">
                                        <h5 className="card-title">BW</h5>
                                        <input 
                                            type="text" 
                                            name="bw" 
                                            className="form-control" 
                                            placeholder="BW" 
                                            onChange={this.handleInputChange}>
                                        </input>
                                    </div>
                                    <div className="col">
                                        <h5 className="card-title">medio</h5>
                                        <  input 
                                            type="text"
                                            name="medio" 
                                            className="form-control" 
                                            placeholder="Medio" 
                                            onChange={this.handleInputChange}>
                                        
                                        </input>
                                    </div>                          
                                </div>
                                
                            
                            

                        </div>
                    </div>
                    <div className="row col-sm-1">
                        <div className="row m-auto">
                            <button type="submit" className="btn btn-primary mb-2">+</button>
                            
                        </div>
                        
                            
                        
                    </div>
                </div>
            </form>
        );
    }

}
export default OportunidadList;
