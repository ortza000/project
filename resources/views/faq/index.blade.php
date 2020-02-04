@extends('layouts2.master2')

@section('css')

@endsection
@section('content')

<section class="page-header-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="page-header">
                    <h1>Frequently Asked Questions</h1>
                </div>
                <ol class="breadcrumb">
                    <li><a href="home">Home</a></li>
                    <li><a href="{{ route('faq.index') }}">Pages</a></li>
                    <li class="active">FAQ Page</li>
                </ol>
            </div>
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</section>


<div class="container">
    <div class="content-wrapper">
        <div class="faq-wrapper">
            <div class="row">
                <div class="col-xs-12 col-md-9 col-sm-8">
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-default">
                            <div class="panel-heading panel-heading-link" role="tab" id="headingOne">
                                <h2 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"
                                        aria-expanded="true" aria-controls="collapseOne">
                                        How to update the theme?
                                    </a>
                                </h2>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel"
                                aria-labelledby="headingOne">
                                <div class="panel-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                    richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                    brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt
                                    aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading panel-heading-link" role="tab" id="headingTwo">
                                <h2 class="panel-title">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion"
                                        href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        How to disable breadcrumbs?
                                    </a>
                                </h2>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel"
                                aria-labelledby="headingTwo">
                                <div class="panel-body">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse viverra mauris
                                    eget tortor imperdiet vehicula. Proin egestas diam ac mauris molestie hendrerit.
                                    Quisque nec nisi tortor. Etiam at mauris sit amet magna suscipit hend merit non sed
                                    ligula. Vivamus purus odio
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading panel-heading-link" role="tab" id="headingThree">
                                <h2 class="panel-title">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion"
                                        href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Where i can find Fontawesome icons?
                                    </a>
                                </h2>
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel"
                                aria-labelledby="headingThree">
                                <div class="panel-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                    richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                    brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt
                                    aliqua put a bird on it squid single-origin coffee nulla.
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading panel-heading-link" role="tab" id="headingFour">
                                <h2 class="panel-title">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion"
                                        href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        How to make the theme load faster?
                                    </a>
                                </h2>
                            </div>
                            <div id="collapseFour" class="panel-collapse collapse" role="tabpanel"
                                aria-labelledby="headingFour">
                                <div class="panel-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                    richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                    brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt
                                    aliqua put a bird on it squid single-origin coffee nulla.
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading panel-heading-link" role="tab" id="headingFive">
                                <h2 class="panel-title">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion"
                                        href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                        What about themes autoupdate?
                                    </a>
                                </h2>
                            </div>
                            <div id="collapseFive" class="panel-collapse collapse" role="tabpanel"
                                aria-labelledby="headingFive">
                                <div class="panel-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                    richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                    brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt
                                    aliqua put a bird on it squid single-origin coffee nulla.
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading panel-heading-link" role="tab" id="headingSix">
                                <h2 class="panel-title">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion"
                                        href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                        How many pages with slideshow am I able to create??
                                    </a>
                                </h2>
                            </div>
                            <div id="collapseSix" class="panel-collapse collapse" role="tabpanel"
                                aria-labelledby="headingSix">
                                <div class="panel-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                    richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                    brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt
                                    aliqua put a bird on it squid single-origin coffee nulla.
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading panel-heading-link" role="tab" id="headingSeven">
                                <h2 class="panel-title">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion"
                                        href="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                        Enim eiusmod high life accusamus terry richardson?
                                    </a>
                                </h2>
                            </div>
                            <div id="collapseSeven" class="panel-collapse collapse" role="tabpanel"
                                aria-labelledby="headingSeven">
                                <div class="panel-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                    richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor
                                    brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt
                                    aliqua put a bird on it squid single-origin coffee nulla.
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- /.col-md-9 -->

                <div class="col-xs-12 col-md-3 col-sm-4">
                    <div class="sidebar-wrapper">
                        <aside class="widget widget_search">
                            <form role="search" method="get" class="search-form" action="getpost">
                                <label class="sr-only">Search for:</label>
                                <input type="search" class="form-control" placeholder="Search" value="" name="s"
                                    title="Search for:">
                                <button type="submit" class="search-submit" value=""><i
                                        class="fa fa-search"></i></button>
                            </form>
                        </aside>

                        <aside class=" widget widget_recent_entries">
                            <div class="sidebar-tab">
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs nav-justified">
                                    <li class=""><a href="#recent-post" data-toggle="tab">Recent Post</a></li>
                                    <li class="active"><a href="#most-read" data-toggle="tab">Most Read</a></li>
                                </ul>

                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div class="tab-pane fade" id="recent-post">
                                        <ul class="tab-recent-post">
                                            <li><a href="#">Primex is one of the noteable html5 templates in 2015</a>
                                            </li>
                                            <li><a href="#">Image synergistically fabricate covalent expertise</a></li>
                                            <li><a href="#">Primex- the trendy addition for winter</a></li>
                                        </ul>
                                    </div> <!-- /recent post tab -->

                                    <div class="tab-pane fade active in" id="most-read">
                                        <ul class="tab-most-read">
                                            <li><a href="#">Image synergistically fabricate covalent</a></li>
                                            <li><a href="#">Primex responsive html5 template</a></li>
                                            <li><a href="#">Morbi aliquam pellentesque neque tibulum</a></li>
                                        </ul>
                                    </div><!-- /most read tab -->
                                </div>
                            </div><!-- /tab-wrap -->
                        </aside>
                    </div><!-- /.sidebar-wrapper -->
                </div><!-- /.col-md-3 -->
            </div><!-- /.row -->
        </div><!-- /.content-wrapper -->
    </div><!-- /.content-wrapper -->
</div><!-- /.container -->

@endsection

@section('js')
<script>
    $(document).ready(function () {
        document.getElementById('index3').classList.add('active');

    });
</script>

@endsection
