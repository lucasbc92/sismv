import React from "react";

import { BrowserRouter, Switch, Route } from "react-router-dom";
import Header from "../components/Header";
import Footer from "../components/Footer";
import About from "../pages/About";
import CrimeIndex from "../pages/crime/CrimeIndex";

function Routes() {
    return (
        <BrowserRouter>
            <Header />
            <Switch>
                <Route path="/" component={About} exact />
                <Route path="/crime" component={CrimeIndex} exact />
            </Switch>
            <Footer />
        </BrowserRouter>
    );
}

export default Routes;
