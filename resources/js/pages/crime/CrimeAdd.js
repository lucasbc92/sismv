import React from "react";
import "bootstrap/dist/css/bootstrap.min.css";

function CrimeAdd() {
    const addCrime = (e) => {
        e.preventDefault();
        return;
    };
    return (
        <form onSubmit={addCrime}>
            <br />
            <div className="form-row">
                <div className="form-group col-md-2">
                    <label htmlFor="cadastroNome">Nome da câmera</label>
                    <input
                        type="text"
                        className="form-control"
                        id="cadastroNome"
                        name="cadastroNome"
                        placeholder="Cadastrar nome da câmera"
                        value=""
                        data-toggle="tooltip"
                        data-placement="right"
                        title="Nome da câmera. Ex.: TIJ_LPR"
                    />
                </div>
                <div className="form-group col-md-6">
                    <label htmlFor="cadastroDescricao">Descrição</label>
                    <input
                        type="text"
                        className="form-control"
                        id="cadastroDescricao"
                        name="cadastroDescricao"
                        placeholder="Cadastrar descrição do local da câmera"
                        value=""
                        data-toggle="tooltip"
                        data-placement="right"
                        title="Descrição do local da câmera."
                    />
                </div>
            </div>
            <div className="form-row">
                <div className="form-group col-md-2">
                    <label htmlFor="cadastroLatitude">Latitude</label>
                    <input
                        type="number"
                        className="form-control"
                        id="cadastroLatitude"
                        name="cadastroLatitude"
                        placeholder="Cadastrar latitude da câmera"
                        value=""
                        data-toggle="tooltip"
                        data-placement="right"
                        title="Latitude da câmera"
                    />
                </div>
                <div className="form-group col-md-2">
                    <label htmlFor="cadastroLongitude">Longitude</label>
                    <input
                        type="number"
                        className="form-control"
                        id="cadastroLongitude"
                        name="cadastroLongitude"
                        placeholder="Cadastrar longitude da câmera"
                        value=""
                        data-toggle="tooltip"
                        data-placement="right"
                        title="Longitude da câmera"
                    />
                </div>
                <div className="form-group col-md-2">
                    <label htmlFor="cadastroParceiro">Parceiro</label>
                    <input
                        type="text"
                        className="form-control"
                        id="cadastroParceiro"
                        name="cadastroParceiro"
                        placeholder="Cadastrar parceiro da câmera"
                        value=""
                        data-toggle="tooltip"
                        data-placement="right"
                        title="Parceiro da câmera"
                    />
                </div>
                <div className="form-group col-sm-2">
                    <label htmlFor="cadastroMunicipio">Município</label>
                    <select
                        name="cadastroMunicipio"
                        id="cadastroMunicipio"
                        className="form-control"
                        value="0"
                    >
                        <option value="0">Estado inteiro</option>
                    </select>
                </div>
            </div>
            <div className="form-row">
                <div className="col-md-6">
                    <button type="submit" className="btn btn-primary">
                        Adicionar Crime
                    </button>
                </div>
            </div>
        </form>
    );
}

export default CrimeAdd;
