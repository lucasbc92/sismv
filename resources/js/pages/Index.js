import React from "react";
import ReactDOM from "react-dom";
import Routes from "../routes";

function Index() {
    return (
        <div className="container">
            <Routes />
        </div>
    );
}

export default Index;

if (document.getElementById("root")) {
    ReactDOM.render(<Index />, document.getElementById("root"));
}
