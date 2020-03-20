import { toast, cssTransition } from 'react-toastify';

const Slide = cssTransition({
    enter: 'slideInLeft',
    exit: 'slideOutLeft',
    duration: 500
});
const config = {
    transition: Slide,
    autoClose: 5000,
    pauseOnFocusLoss: false,
    position: "bottom-center"
};

class Notify {
    static success(msg = 'Successo', options = {}) {
        return toast.success(
            msg,
            { ...config, ...options }
        );
    }

    static error(msg = 'Errore', options = {}) {
        return toast.error(
            msg,
            { ...config, ...options }
        );
    }

    static warn(msg = 'Avviso', options = {}) {
        return toast.warn(
            msg,
            { ...config, ...options }
        );
    }

    static info(msg = 'Informazione', options = {}) {
        return toast.info(
            msg,
            { ...config, ...options }
        );
    }
}

export default Notify;
