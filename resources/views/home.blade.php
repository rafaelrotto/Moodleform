@extends('layouts.app')

@section('content')

<div class="home">
    <!-- Trigger the modal with a button -->
    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#myModal">Novo Relatório</button>
    <br>
    <!-- Modal -->
    <div id="myModal" class="modal" role="dialog">
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
                                <div class="form-group col-md-12">
                                    <label for="date">Data</label>
                                    <input type="text" class="form-control @if($errors->has('date')) is-invalid @endif" id="date" name="date" value="{{old('date')}}">
                                    @if($errors->has('date'))
                                    <div id="invalid-feedback" class="invalid-feedback">
                                        @foreach($errors->get('date') as $error)
                                        {{$error}}
                                        @endforeach
                                    </div>
                                    @endif
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="start">Horário do início do atendimento</label>
                                    <input type="text" class="form-control @if($errors->has('start')) is-invalid @endif" id="start" name="start" value="{{old('start')}}">
                                    @if($errors->has('start'))
                                    <div id="invalid-feedback" class="invalid-feedback">
                                        @foreach($errors->get('start') as $error)
                                        {{$error}}
                                        @endforeach
                                    </div>
                                    @endif
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="end">Horário do fim do atendimento</label>
                                    <input type="text" class="form-control @if($errors->has('end')) is-invalid @endif" id="end" name="end" value="{{old('end')}}" onkeyup="returnDurationTime()">
                                    @if($errors->has('end'))
                                    <div id="invalid-feedback" class="invalid-feedback">
                                        @foreach($errors->get('end') as $error)
                                        {{$error}}
                                        @endforeach
                                    </div>
                                    @endif
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="duration">Duração (Minutos)</label>
                                    <input type="text" class="form-control @if($errors->has('duration')) is-invalid @endif" id="duration" name="duration" value="{{old('duration')}}">
                                    @if($errors->has('duration'))
                                    <div id="invalid-feedback" class="invalid-feedback">
                                        @foreach($errors->get('duration') as $error)
                                        {{$error}}
                                        @endforeach
                                    </div>
                                    @endif
                                </div>
                            </div>
                            <p>Tipo de atendimento</p>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="student" id="student">
                                        <label class="form-check-label" for="student">
                                            Aluno
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="teacher" id="teacher">
                                        <label class="form-check-label" for="teacher">
                                            Professor
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="employer" id="employer">
                                        <label class="form-check-label" for="employer">
                                            Funcionários e outros
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="client">Aluno(a)</label>
                                    <input type="text" class="form-control @if($errors->has('client')) is-invalid @endif" id="client" name="client" maxlength="100" value="{{old('client')}}">
                                    @if($errors->has('client'))
                                    <div id="invalid-feedback" class="invalid-feedback">
                                        @foreach($errors->get('client') as $error)
                                        {{$error}}
                                        @endforeach
                                    </div>
                                    @endif
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="course">Curso</label>
                                    <input type="text" class="form-control @if($errors->has('course')) is-invalid @endif" id="course" name="course" maxlength="100" value="{{old('course')}}">
                                    @if($errors->has('course'))
                                    <div id="invalid-feedback" class="invalid-feedback">
                                        @foreach($errors->get('course') as $error)
                                        {{$error}}
                                        @endforeach
                                    </div>
                                    @endif
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
                                    <input type="text" class="form-control @if($errors->has('class')) is-invalid @endif" id="class" name="class" maxlength="100" value="{{old('class')}}">
                                    @if($errors->has('class'))
                                    <div id="invalid-feedback" class="invalid-feedback">
                                        @foreach($errors->get('class') as $error)
                                        {{$error}}
                                        @endforeach
                                    </div>
                                    @endif
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="obs">Observação</label>
                                    <br>
                                    <textarea name="obs" id="obs" name="obs" class="form-control @if($errors->has('obs')) is-invalid @endif" maxlength="500" placeholder="{{old('obs')}}"></textarea>
                                    @if($errors->has('obs'))
                                    <div id="invalid-feedback" class="invalid-feedback">
                                        @foreach($errors->get('obs') as $error)
                                        {{$error}}
                                        @endforeach
                                    </div>
                                    @endif
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="status">Status</label>
                                    <select id="status" name="status" class="form-control">
                                        <option value="Finalizado">Finalizado</option>
                                        <option value="Em andamento">Em andamento</option>
                                        <option value="Pendente">Pendente</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="color" name="color" id="color" name="color" class="form-control"></input>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary" onclick="setColor()">Salvar</button>
                        </form>
                    </div>
                    <div class="modal-footer">
                    </div>
                </div>
            </form>

        </div>
    </div>
    <br>
    <div class="table-responsive-lg">
        <table class="table table-striped" id="reports">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Data</th>
                    <th scope="col">Tempo</th>
                    <th scope="col">Aluno(a)</th>
                    <th scope="col">Curso</th>
                    <th scope="col">Tipo de Atendimento</th>
                    <th scope="col">Disciplina</th>
                    <th scope="col">Status</th>
                    <th scope="col"></th>
                    <th scope="col">Ação</th>
                </tr>
            </thead>
            <tbody>
                @foreach($reports as $report)
                <tr>
                    <td>{{ $report->date }}</td>
                    <td>{{ $report->duration }} minutos</td>
                    <td>{{ $report->client }}</td>
                    <td>{{ $report->course }}</td>
                    <td>{{ $report->serviceType }}</td>
                    <td>{{ $report->class }}</td>
                    <td>{{ $report->status }}</td>
                    <td><input type="color" disabled value="{{ $report->color }}"></td>
                    <td></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    @if (count($errors) > 0)

    <script>
        alert("Algumas informações estão incorretas, corrija os campos e tente novamente!");
        $(document).ready(function() {
            $('#myModal').modal('show');
        });
    </script>

    @endif

    <script>
        const date = new Date();

        let currentDay = String(date.getDate()).padStart(2, '0');

        let currentMonth = String(date.getMonth() + 1).padStart(2, "0");

        let currentYear = date.getFullYear();

        document.getElementById('date').value = `${currentDay}${currentMonth}${currentYear}`
    </script>

    @endsection
