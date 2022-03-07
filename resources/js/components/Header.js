import React from "react";
import { Link } from "react-router-dom";
function Header() {
    return (
        <nav className="navbar-expand-sm navbar-light bg-light mb-3">
            <div className="container">
                <a className="navbar-brand" href="#">
                    SISMV
                </a>
                <button
                    className="navbar-toggler"
                    data-toggle="collapse"
                    data-target="#navbarNav"
                >
                    <span className="navbar-toggler-icon"></span>
                </button>
                <div className="collapse navbar-collapse" id="navbarNav">
                    <ul className="navbar-nav ml-auto">
                        <li className="nav-item">
                            <Link className="nav-link" to="/">
                                Sobre o Sistema
                            </Link>
                        </li>
                        <li className="nav-item">
                            <Link className="nav-link" to="/crime">
                                Crimes
                            </Link>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    );
}

export default Header;
