@extends('app')
@section('content')

   @include('components.banner')
         <!-- Marketing messaging and featurettes
         ================================================== -->
         <!-- Wrap the rest of the page in another container to center all the content. -->

   @include('components.marketing')

           <!-- START THE FEATURETTES -->

   @include('components.features')



           <!-- /END THE FEATURETTES -->

         </div><!-- /.container -->
@endsection
