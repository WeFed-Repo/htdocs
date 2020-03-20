import React, {Component} from 'react';
import './style.scss'

// Smista le modali a seconda del contenuto dichiarato
class WidgetModalBody extends Component {

  constructor (props) {
    super(props);
    this.state = {
        "ModalType": null,
        "error": null
    }
  }

  componentDidCatch (error) {
      this.setState({
          error
      });
  }

  async componentDidMount () {
    try {
        const { default: ModalType } = await import(
            /* webpackMode: "eager" */
            'components/dashboard/modals/Modal_' + this.props.modalType
            );
        this.setState({
            ModalType
        })
    } catch (error) {
      this.setState({
          error
      });
    }
  }

  render() {
    const { ModalType, error } = this.state;

    if (error) {
      return (<div>{error.message}</div>);
    } else if (!ModalType) {
      return (<div>Loading...</div>);
    } else {
      return <ModalType {...this.props}/>
    }
  }


}

export default WidgetModalBody;
