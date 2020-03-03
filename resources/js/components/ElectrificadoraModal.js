

import React, {Component} from 'react';


class ElectrificadoraModal extends Component{

    render(){
        return(
           
        <div className="modal fade" id="electrificadora" data-backdrop="static" tabIndex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div className="modal-dialog" role="document">
                <div className="modal-content">
                <div className="modal-header">
                    <h5 className="modal-title" id="staticBackdropLabel">Electrificadora</h5>
                    <button type="button" className="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div className="modal-body">
                    <div className="row mb-4">
                    <div className="form-group">
                        <textarea className="form-control"style={{width: '450px', height: '100px'}}></textarea>
                    </div>
                    </div>  
                    <div className="row">
                        <div className='col-sm-11'>
                            <div className="_30w2 clearfix">
                            <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
                                <option selected>N/A</option>
                                <option value="1">solicitud enviada</option>
                                <option value="2">Atrazado</option>
                                <option value="3">Re-programar</option>
                                <option value="3">Aprobado</option>
                            </select>
                            
                            
                            </div>
                            
                        </div>
                    </div>
                    <div className="row">
                         <label for="start"> Alerta </label>
                            <form name="formulario" method="post" action="http://pagina.com/send.php">
                            <input type="date"
                                    name="fecha" 
                                    min="2019-01-01"
                                    max="2025-05-25" 
                                    step="2"/>
                            hora:
                            <input type="time" 
                                    name="hora" 
                                    min="8:00"
                                    max="17:00" 
                                    step="3600"/>
                            </form>
                    </div>


                    <div class="container">
                        <div class="form-group col-xs-12 col-sm-6 col-md-4">
                            <label for="banner">Banner:</label>
                            <div class="input-group">
                                <label class="input-group-btn">
                                    <span class="btn btn-primary btn-file">
                                        Banner <input accept=".jpg,.png,.jpeg,.gif" class="hidden" name="banner" type="file" id="banner"/>
                                    </span>
                                </label>
                                <input class="form-control" id="banner_captura" readonly="readonly" name="banner_captura" type="text" value=""/>
                            </div>
                        </div>
                    </div>




                </div>
                <div className="modal-footer">
                    <button type="button" className="btn btn-secondary" data-dismiss="modal">Salir</button>
                    <button type="button" className="btn btn-primary">Agendar</button>
                </div>
                </div>
            </div>
        </div>

        );
    }
   


}
export default ElectrificadoraModal
