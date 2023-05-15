'use strict';

const e = React.createElement;

class LikeButton extends React.Component {
    render() {

        return (
            <button onClick={() => this.setState({ liked: true })}>
              Like
            </button>
          );
    }
}

const domContainer = document.querySelector('#kpi_calculator_container');
const root = ReactDOM.createRoot(domContainer);
root.render(e(LikeButton));