{!! Form::open(['action' => ['PostController@search'], 'method'=> 'POST' ]) !!}

<table style="float:right;margin-top:1%;">
    
        <td style="margin:0px;">{{Form::label('title', 'Title',['style'=>'margin-top:10%'])}}:</td>
        <td style="margin:0px;">{{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Book title here'])}}</td>
        <td style="margin:0px;">{{Form::label('author', 'Author',['style'=>'margin-top:10%'])}}:</td>
        <td style="margin:0px;">{{Form::text('author', '', ['class' => 'form-control', 'placeholder' => 'Author'])}}</td>
        
        <td style="margin:0px;">{{Form::submit('Search', ['class'=>'btn btn-primary','style'=>'margin:0px;'])}}</td>
    
</table>


{!! Form::close() !!}