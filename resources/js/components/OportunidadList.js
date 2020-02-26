import React, {Component} from 'react';



class OportunidadList extends Component{

    constructor () {
        super();
        this.state = {
            sid: '',
            tipo: '',
            medio:'',
            bw:'',
            direccion: '',
            ciudad:'',
            telefono:'',
            descripcion:'lorem'
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
            <form className="card" onSubmit={this.handleSubmit}>
                <div className="row m-2"> 
                    <div className="col-sm-1">
                        <img src="images/SinFoto.jpg" className="card-img-top" alt=""></img>
                        <span className="badge badge-danger navbar-badge">3</span>

                    </div>
                    
                    <div className="form-group col-sm-2">
                        <div className="row">
                            <h4 className="">Profamilia</h4>
                        </div>
                        <div className="row">
                            <h5 className="">Opotunidad: 20802 </h5>
                        </div>        
                    </div>

                    <div className="form-group col-sm-2">
                        <div className="row">
                            {/*  <h5 className="card-title">SID: </h5>*/}
                            <input 
                                type="text"
                                name="sid" 
                                className="form-control" 
                                placeholder="SID" 
                                onChange={this.handleInputChange}>
                            </input>   
                        </div>
                        <div className="row mt-1">
                            {/*  <h5 className="card-title">Tipo</h5>*/}
                            <input 
                                type="" 
                                name="tipo" 
                                className="form-control" 
                                placeholder="Tipo" 
                                onChange={this.handleInputChange}>

                            </input>
                        </div>
                    </div>       
                        

                        <div className="form-group col-sm-2 ml-2">
                            <div className="row">
                            {/*  <h5 className="card-title">Ciudad</h5>*/}
                                <input
                                    type="text" 
                                    name="ciudad" 
                                    className="form-control"
                                    placeholder="Ciudad" 
                                    onChange={this.handleInputChange}>
                                </input>
                            </div>
                            <div className="row mt-1">
                                {/* <h5 className="card-title">Direccion</h5>*/}
                                <input 
                                    type="text" 
                                    name="direccion" 
                                    className="form-control" 
                                    placeholder="Direccion" 
                                    onChange={this.handleInputChange}>

                                </input>
                            </div>
                        </div>
                        
                        <div className="form-group col-sm-3">
                            {/*<h5 className="card-title">Telefono:</h5>*/}
                            <div className="row">
                                <input 
                                    type="text" 
                                    name="telefono" 
                                    className="form-control" 
                                    placeholder="Telefono" 
                                    onChange={this.handleInputChange}>

                                </input>
                            </div>
                            <div className="row mt-1">
                                <div className="col">
                                    <input 
                                        type="text" 
                                        name="bw" 
                                        className="form-control" 
                                        placeholder="BW" 
                                        onChange={this.handleInputChange}>

                                        </input>
                                </div>
                                <div className="col">
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
                        <div className="form-group col-sm-1 ">
                            <div className="row ml-1">
                                <button type="submit" className="btn btn-primary mb-2">+</button>
                            </div>
                            <div className="row ml-1">
                                <button type="submit" className="btn">Crear</button>
                            </div>
                        </div>

                </div>
                <div className="row accent-danger"> 
                

                </div>
            </form>
        );
    }

}
export default OportunidadList;
