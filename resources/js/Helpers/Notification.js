class Notification {
    success(){
        new Noty({
            type: 'success',
            layout: 'topRight',
            text: 'Some notification text'
        }).show();
    }

    alert(){
        new Noty({
            type: 'alert',
            layout: 'topRight',
            text: 'Text alert'
        }).show();
    }

    error(){
        new Noty({
            type: 'error',
            layout: 'topRight',
            text: 'Text error'
        }).show();
    }
}

export default Notification = new Notification();
