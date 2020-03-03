import React, {Component} from 'react';


const getRemainTime = deadline => {
    let now =new Date(),
        remainTime = (new Date(deadline)- now + 1000)/1000,
        remainSeconds =('0'+ Math.floor(remainTime % 60)).slice(-2),
        remainMinutes =('0'+ Math.floor(remainTime /60 % 60)).slice(-2),
        remainHours =('0'+ Math.floor(remainTime /3600 % 24)).slice(-2),
        remainDays = Math.floor(remainTime /(3600 * 24));
return{
    remainTime,
    remainSeconds,
    remainMinutes,
    remainHours,
    remainDays
}
};   
/*
const countdown = (deadline, elem, finalMessage) => {
    const el = document.getElementById(elem);

    const timerUpdate = setInterval( ()=> {
        let t = getRemainTime(deadline);
        
       // el = `${t.remainDays}d:${t.remainHours}h:${t.remainMinutes}m:${t.remainSeconds}s`;

        if (t.remainTime <= 1){
            clearInterval(timerUpdate)
            //el.innerHTML = finalMessage;
            con
        }
    }, 1000);

};
console.log(countdown('Feb 28 2020 23:52:27 GMT-0500', 'clock','tiempo agotado'))
*/

//console.log(getRemainTime('Feb 27 2020 11:29:42 GMT-0500'));

class FactibilidadModal extends Component{
    
    handleSubmit(){
        
        console.log(getRemainTime('Feb 27 2020 11:33:42 GMT-0500'));
        
    }
     
    render(){
        return(
            <div className="modal fade" id="factibilidad" data-backdrop="static" tabIndex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div className="modal-dialog" role="document">
                <div className="modal-content">
                <div className="modal-header">
                    <h5 className="modal-title" id="staticBackdropLabel">Modal title</h5>
                    <button type="button" className="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div className="modal-body">
                <div id="clock">

                </div>
                </div>
                <div className="modal-footer">
                    <button type="button" className="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" className="btn btn-primary" onClick={this.handleSubmit}>Understood</button>
                </div>
                </div>
            </div>
            
            </div>
            
        );
        
    }
}

export default FactibilidadModal