@extends('layouts.app')

@section('content')

<div class="home">
    <!-- Trigger the modal with a button -->
    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal">Novo Relatório</button>
    <br>
    <!-- Modal -->
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Novo Relatório</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="data">Data</label>
                                <input type="text" class="form-control" id="data">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="month">Mês</label>
                                <input type="text" class="form-control" id="month">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-5">
                                <label for="timeStart">Horário do início do atendimento</label>
                                <input type="text" class="form-control" id="timeStart">
                            </div>
                            <div class="form-group col-md-5">
                                <label for="timeEnd">Horário do fim do atendimento</label>
                                <input type="text" class="form-control" id="timeEnd">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="duration">Duração</label>
                                <input type="text" class="form-control" id="duration">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="studentName">Aluno(a)</label>
                                <input type="text" class="form-control" id="studentName">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="course">Curso</label>
                                <input type="text" class="form-control" id="course">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="serviceType">Atendimento</label>
                                <select id="serviceType" class="form-control">
                                    <option>Correção - Avaliação Final</option>
                                    <option>Correção - Banco de Questões</option>
                                    <option>Correção - Currículo Lattes</option>
                                    <option>Correção - Data de Acesso</option>
                                    <option>Correção - Estudo de Caso</option>
                                    <option>Correção - Livros</option>
                                    <option>Correção - Plano de Ensino</option>
                                    <option>Correção - Prova de Exame</option>
                                    <option>Correção - Vídeos</option>
                                    <option>Liberação de drive</option>
                                    <option>Liberação de prova</option>
                                    <option>Orientação para aluno</option>
                                    <option>Orientação para professor</option>
                                    <option>Orientações sobre o uso do Moodle</option>
                                    <option>Orientação sobre o uso do Portal do Aluno</option>
                                    <option>Problemas no acesso</option>
                                    <option>Recuperação de Senha</option>
                                    <option>Sincronização</option>
                                    <option>Verificação de Log</option>
                                    <option>Outros atendimentos</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="class">Disciplina</label>
                                <input type="text" class="form-control" id="class">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="obs">Observação</label>
                                <br>
                                <textarea name="obs" id="obs" cols="100" rows="4"></textarea>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Salvar</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>
    <br>
    <table class="table table-striped">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Data</th>
                <th scope="col">Mês</th>
                <th scope="col">Horário Início</th>
                <th scope="col">Horário Início</th>
                <th scope="col">Aluno(a)</th>
                <th scope="col">Curso</th>
                <th scope="col">Atendimento</th>
                <th scope="col">Disciplina</th>
                <th scope="col">Observação</th>
                <th scope="col">Status</th>
                <th scope="col">Ação</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td></td>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </tbody>
    </table>

    @endsection