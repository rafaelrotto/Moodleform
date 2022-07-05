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
            <form class="form" action="/home" method="POST">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Novo Relatório</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="date">Data</label>
                                    <input type="text" class="form-control" id="date" name="date">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="month">Mês</label>
                                    <input type="text" class="form-control" id="month" name="month">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-5">
                                    <label for="start">Horário do início do atendimento</label>
                                    <input type="text" class="form-control" id="start" name="start">
                                </div>
                                <div class="form-group col-md-5">
                                    <label for="end">Horário do fim do atendimento</label>
                                    <input type="text" class="form-control" id="end" name="end">
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="duration">Duração</label>
                                    <input type="text" class="form-control" id="duration" name="duration">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="client">Aluno(a)</label>
                                    <input type="text" class="form-control" id="client" name="client">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="course">Curso</label>
                                    <input type="text" class="form-control" id="course" name="course">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="serviceType">Atendimento</label>
                                    <select id="serviceType" name="serviceType" class="form-control">
                                        <option value="Correção - Avaliação Final">Correção - Avaliação Final</option>
                                        <option value="Correção - Banco de Questões">Correção - Banco de Questões</option>
                                        <option value="Correção - Currículo Lattes">Correção - Currículo Lattes</option>
                                        <option value="Correção - Avaliação Final">Correção - Data de Acesso</option>
                                        <option value="Correção - Avaliação Final">Correção - Estudo de Caso</option>
                                        <option value="Correção - Avaliação Final">Correção - Livros</option>
                                        <option value="Correção - Avaliação Final">Correção - Plano de Ensino</option>
                                        <option value="Correção - Avaliação Final">Correção - Prova de Exame</option>
                                        <option value="Correção - Avaliação Final">Correção - Vídeos</option>
                                        <option value="Correção - Avaliação Final">Liberação de drive</option>
                                        <option value="Correção - Avaliação Final">Liberação de prova</option>
                                        <option value="Correção - Avaliação Final">Orientação para aluno</option>
                                        <option value="Correção - Avaliação Final">Orientação para professor</option>
                                        <option value="Correção - Avaliação Final">Orientações sobre o uso do Moodle</option>
                                        <option value="Correção - Avaliação Final">Orientação sobre o uso do Portal do Aluno</option>
                                        <option value="Correção - Avaliação Final">Problemas no acesso</option>
                                        <option value="Correção - Avaliação Final">Recuperação de Senha</option>
                                        <option value="Correção - Avaliação Final">Sincronização</option>
                                        <option value="Correção - Avaliação Final">Verificação de Log</option>
                                        <option value="Correção - Avaliação Final">Outros atendimentos</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="class">Disciplina</label>
                                    <input type="text" class="form-control" id="class" name="class">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="obs">Observação</label>
                                    <br>
                                    <textarea name="obs" id="obs" name="obs" class="form-control"></textarea>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Salvar</button>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </form>

        </div>
    </div>
    <br>
    <table class="table table-striped" id="reports">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Data</th>
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
            @foreach($reports as $report)
            <tr>
                <td>{{ $report->date }}</td>
                <td>{{ $report->start }}</td>
                <td>{{ $report->end }}</td>
                <td>{{ $report->client }}</td>
                <td>{{ $report->course }}</td>
                <td>{{ $report->serviceType }}</td>
                <td>{{ $report->class }}</td>
                <td>{{ $report->obs }}</td>
                <td></td>
                <td></td>
            </tr>
            @endforeach
        </tbody>
    </table>

    @endsection