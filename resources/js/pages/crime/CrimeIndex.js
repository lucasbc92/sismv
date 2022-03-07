import React from "react";
import "bootstrap/dist/css/bootstrap.min.css";
import CrimeAdd from "./CrimeAdd";
import CrimeList from "./CrimeList";

function CrimeIndex() {
    return (
        // <div className="row justify-content-center">
        //     <div className="col-md-8">
        //         <div className="card">
        //             <div className="card-header">Index</div>
        //         </div>
        //     </div>
        // </div>
        <div className="media">
            <div className="media-body" id="media-body">
                <ul className="nav nav-tabs" id="tab-crimes" role="tablist">
                    <li className="nav-item">
                        <a
                            className="nav-link active"
                            id="add-tab"
                            data-toggle="tab"
                            href="#add"
                            role="tab"
                            aria-controls="add"
                            aria-selected="true"
                        >
                            Adicionar Crime
                        </a>
                    </li>
                    <li className="nav-item">
                        <a
                            className="nav-link"
                            id="list-tab"
                            data-toggle="tab"
                            href="#list"
                            role="tab"
                            aria-controls="list"
                            aria-selected="false"
                        >
                            Pesquisar Crimes
                        </a>
                    </li>
                </ul>
                <div className="tab-content" id="tab-content-crimes">
                    <div
                        className="tab-pane fade show active"
                        id="add"
                        role="tabpanel"
                        aria-labelledby="add-tab"
                    >
                        <CrimeAdd />
                    </div>
                    <div
                        className="tab-pane fade"
                        id="list"
                        role="tabpanel"
                        aria-labelledby="list-tab"
                    >
                        <CrimeList />
                    </div>
                </div>
                <br />
                <input
                    type="hidden"
                    id="searchPageScroll"
                    name="searchPageScroll"
                    value="0"
                />
                <input
                    type="hidden"
                    id="searchTotalResults"
                    name="searchTotalResults"
                    value="0"
                />
                <div className="progress">
                    <div
                        id="progress-bar"
                        className="progress-bar progress-bar-striped bg-success"
                        role="progressbar"
                        style={{ width: "0%" }}
                        aria-valuenow="0"
                        aria-valuemin="0"
                        aria-valuemax="100"
                    ></div>
                </div>
                <br />
            </div>
        </div>
    );
}

export default CrimeIndex;
