import React, { useState, useEffect } from "react";
import { Link } from "react-router-dom";
import axios from "axios";
import "bootstrap/dist/css/bootstrap.min.css";

function CrimeList(props) {
    const [crimes, setCrimes] = useState([]);
    const [result, setResult] = useState("Aguardando pesquisa.");

    const listCrimes = (e, page) => {
        e.preventDefault();
        return;
    };

    const listPreviousCrimes = () => {
        return;
    };

    const listNextCrimes = () => {
        return;
    };

    useEffect(() => {
        axios.get("http://localhost:8000/api/crime").then((response) => {
            console.log(response);
            setCrimes(response.data);
        });
    }, []);

    return (
        <form onSubmit={(e) => listCrimes(e, 0)}>
            <br />
            <div className="form-row">
                <div className="form-group col-md-2">
                    <label htmlFor="buscaNome">Nome da câmera</label>
                    <input
                        type="text"
                        className="form-control"
                        id="buscaNome"
                        name="buscaNome"
                        placeholder="Buscar nome da câmera"
                        value=""
                        data-toggle="tooltip"
                        data-placement="right"
                        title="Nome da câmera. Ex.: TIJ_LPR"
                    />
                </div>
                <div className="form-group col-md-6">
                    <label htmlFor="buscaDescricao">Descrição</label>
                    <input
                        type="text"
                        className="form-control"
                        id="buscaDescricao"
                        name="buscaDescricao"
                        placeholder="Buscar descrição do local da câmera"
                        value=""
                        data-toggle="tooltip"
                        data-placement="right"
                        title="Descrição do local da câmera."
                    />
                </div>
            </div>
            <div className="form-row">
                <div className="form-group col-md-2">
                    <label htmlFor="buscaParceiro">Parceiro</label>
                    <input
                        type="text"
                        className="form-control"
                        id="buscaParceiro"
                        name="buscaParceiro"
                        placeholder="Buscar parceiro da câmera"
                        value=""
                        data-toggle="tooltip"
                        data-placement="right"
                        title="Parceiro da câmera"
                    />
                </div>
                <div className="form-group col-sm-2">
                    <label htmlFor="buscaMunicipio">Município</label>
                    <select
                        name="buscaMunicipio"
                        id="buscaMunicipio"
                        className="form-control"
                        value="0"
                    >
                        <option value="0">Estado inteiro</option>
                    </select>
                </div>
            </div>
            <div className="form-row">
                <div className="form-group col-md-2">
                    <label htmlFor="buscaNumResultados">Resultados:</label>
                    <input
                        type="number"
                        className="form-control"
                        id="buscaNumResultados"
                        name="buscaNumResultados"
                        value="30"
                        data-toggle="tooltip"
                        data-placement="right"
                        title="Número de resultados a ser exibido na página"
                    />
                </div>
            </div>
            <div className="form-row">
                <div className="col-md-6">
                    <button type="submit" className="btn btn-primary">
                        Pesquisar Crimes
                    </button>
                </div>
            </div>
            <br />
            <div id="tabela">
                <table className="table table-striped table-bordered table-hover">
                    <caption>
                        <nav aria-label="Paginacao">
                            <ul className="pagination">
                                <li className="page-item">
                                    <button
                                        className="btn btn-primary"
                                        disabled
                                        id="buttonPrevious"
                                        name="buttonPrevious"
                                        onClick={listPreviousCrimes}
                                    >
                                        Anteriores
                                    </button>
                                </li>
                                &nbsp;
                                <li className="page-item">
                                    <button
                                        className="btn btn-primary"
                                        disabled
                                        id="buttonNext"
                                        name="buttonNext"
                                        onClick={listNextCrimes}
                                    >
                                        Próximas
                                    </button>
                                </li>
                            </ul>
                        </nav>
                    </caption>
                    <thead>
                        <tr className="thead-light">
                            <th style={{ width: "60%" }}>Nome do Crime</th>
                            <th style={{ width: "40%" }}>Criado em</th>
                        </tr>
                    </thead>
                    <tbody id="tableBody">
                        {crimes.map((crime) => (
                            <tr>
                                <td>{crime.name}</td>
                                <td>{crime.created_at}</td>
                            </tr>
                        ))}
                    </tbody>
                    <tfoot id="resultFooter">
                        <tr className="thead-light">
                            <td colSpan="16">
                                <div id="result">{result}</div>
                            </td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </form>
    );
}

export default CrimeList;
