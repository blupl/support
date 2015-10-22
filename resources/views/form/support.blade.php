@set_meta('title', 'BCB Management Form')

{!! Form::open(['url'=>'management/management']) !!}
{!! Form::hidden('user_id', Auth::user()->id) !!}
{!! Form::hidden('franchise_id', Auth::user()->franchise->id) !!}

<fieldset xmlns="http://www.w3.org/1999/html">
    <div class="form-group">
        <div class="col-md-6">
            {!! Form::label('name', 'NAME') !!}
            {!! Form::text('name', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-md-6">
            {!! Form::label('gender', 'GENDER') !!}
            {!! Form::select('gender', ['male'=>'Male', 'female'=>'Female', 'other'=>'Other'], null, ['class'=>'form-control select2', 'style'=>'width: 100%;']) !!}
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-6">
            {!! Form::label('designation', 'DESIGNATION') !!}
            {!! Form::select('name', null, ['class'=>'form-control', 'select2', 'placeholder'=>'MLSS']) !!}
        </div>
        <div class="col-md-6">
            {!! Form::label('department', 'DEPARTMENT') !!}
            {!! Form::select('department', [
            'adminhr'=>'Admin &amp; HR',
            'age-group'=>'Age Group Tournament',
            'anti-corruption'=>'Anti-Corruption',
            'board-affairs'=>'Board Affairs',
            'bpl-council'=>'BPL Governing Council',
            'ccdm'=>'CCDM',
            'cricket-operations'=>'Cricket Operations',
            'disciplinary'=>'Disciplinary',
            'management'=>'Facilities Management',
            'finance'=>'Finance',
            'development'=>'Game Development',
            'grounds'=>'Grounds',
            'performance'=>'High Performance',
            'Logistics'=>'Logistics and Protocol',
            'marketing'=>'Marketing and Commercial',
            'media'=>'Media and Communications',
            'Medical'=>'Medical',
            'security'=>'Security',
            'tender'=>'Tender and Purchase',
            'tournament'=>'Tournament',
            'umpires'=>'Umpires',
            'venue'=>'Venue Administration',
            'women'=>'Women&rsquo;s Wing'],
            null, ['class'=>'form-control select2', 'style'=>'width: 100%;']) !!}
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-6">
            {!! Form::label('organization', 'ORGANIZATION') !!}
            {!! Form::select('name', null, ['class'=>'form-control', 'select2', 'placeholder'=>'MLSS']) !!}
        </div>
        <div class="col-md-6">
            {!! Form::label('mobile', 'CONTACT MOBILE NUMBER') !!}
            {!! Form::text('phone', null, ['class'=>'form-control']) !!}
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-6">
            {!! Form::label('name-applicant', 'NAME OF REPORTING MANAGER') !!}
            {!! Form::text('name', null, ['class'=>'form-control']) !!}
        </div>
        <div class="col-md-6">
            {!! Form::label('mobile', 'MOBILE NUMBER OF REPORTING MANAGER') !!}
            {!! Form::text('phone', null, ['class'=>'form-control']) !!}
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-6">
            {!! Form::label('personal_id', 'PASSPORT OR NID NUMBER') !!}
            {!! Form::text('personal_id', null,['class'=>'form-control']) !!}
        </div>
        <div class="col-md-6">
            {!! Form::label('email', 'CONTACT E-MAIL ID(if any)') !!}
            {!! Form::text('email', null, ['class'=>'form-control']) !!}
        </div>
    </div>

    <div class="form-group">
        <div class="col-md-6">
            {!! Form::label('present_address', 'PRESENT ADDRESS') !!}
            {!! Form::text('present_address1', null, ['class'=>'form-control', 'placeholder'=>'Line 1']) !!}
            {!! Form::text('present_address2', null, ['class'=>'form-control', 'placeholder'=>'Line 1']) !!}
            <div class="col-md-6">
                {!! Form::select('present_district', [
                'barguna'=>'Barguna',
                'bhola'=>'Bhola',
                'bogra'=>'Bogra',
                'jhalokati'=>'Jhalokati',
                'patuakhali'=>'Patuakhali',
                'pirojpur'=>'Pirojpur',
                'bandarban'=>'Bandarban',
                'brahmanbaria'=>'Brahmanbaria',
                'chandpur'=>'Chandpur',
                'chittagong'=>'Chittagong',
                'comilla'=>'Comilla',
                'cox-bazar'=>'Cox&rsquo;s Bazar',
                'feni'=>'Feni',
                'khagrachhari'=>'Khagrachhari',
                'lakshmipur'=>'Lakshmipur',
                'noakhali'=>'Noakhali',
                'rangamati'=>'Rangamati',
                'dhaka'=>'Dhaka',
                'faridpur'=>'Faridpur',
                'gazipur'=>'Gazipur',
                'gopalganj'=>'Gopalganj',
                'kishoreganj'=>'Kishoreganj',
                'madaripur'=>'Madaripur',
                'manikganj'=>'Manikganj',
                'munshiganj'=>'Munshiganj',
                'narayanganj'=>'Narayanganj',
                'narsingdi'=>'Narsingdi',
                'rajbari'=>'Rajbari',
                'shariatpur'=>'Shariatpur',
                'tangail'=>'Tangail',
                'bagerhat'=>'Bagerhat',
                'chuadanga'=>'Chuadanga',
                'jessore'=>'Jessore',
                'jhenaidah'=>'Jhenaidah',
                'khulna'=>'Khulna',
                'kushtia'=>'Kushtia',
                'magura'=>'Magura',
                'meherpur'=>'Meherpur',
                'narail'=>'Narail',
                'satkhira'=>'Satkhira',
                'jamalpur'=>'Jamalpur',
                'mymensingh'=>'Mymensingh',
                'netrakona'=>'Netrakona',
                'sherpur'=>'Sherpur',
                'joypurhat'=>'Joypurhat',
                'naogaon'=>'Naogaon',
                'natore'=>'Natore',
                'chapainawabganj'=>'Chapainawabganj',
                'pabna'=>'Pabna',
                'rajshahi'=>'Rajshahi',
                'sirajganj'=>'Sirajganj',
                'dinajpur'=>'Dinajpur',
                'gaibandha'=>'Gaibandha',
                'kurigram'=>'Kurigram',
                'lalmonirhat'=>'Lalmonirhat',
                'nilphamari'=>'Nilphamari',
                'panchagarh'=>'Panchagarh',
                'rangpur'=>'Rangpur',
                'thakurgaon'=>'Thakurgaon',
                'habiganj'=>'Habiganj',
                'moulvibazar'=>'Moulvibazar',
                'sunamganj'=>'Sunamganj',
                'sylhet'=>'Sylhet'
                ], 'dhaka', ['class'=>'form-control select2', 'placeholder'=>'District-Choose from list', 'style'=>'width: 100%;']) !!}
            </div>
            <div class="col-md-6">
                {!! Form::text('present_zip', null, ['class'=>'form-control', 'placeholder'=>'Post Code']) !!}
            </div>
        </div>

        <div class="col-md-6">
            {!! Form::label('permanent_address', 'PERMANENT ADDRESS') !!}
            {!! Form::text('permanent_address1', null, ['class'=>'form-control', 'placeholder'=>'Line 1']) !!}
            {!! Form::text('permanent_address2', null, ['class'=>'form-control', 'placeholder'=>'Line 1']) !!}
            <div class="col-md-6">
                {!! Form::select('permanent_district', [
                'barguna'=>'Barguna',
                'bhola'=>'Bhola',
                'bogra'=>'Bogra',
                'jhalokati'=>'Jhalokati',
                'patuakhali'=>'Patuakhali',
                'pirojpur'=>'Pirojpur',
                'bandarban'=>'Bandarban',
                'brahmanbaria'=>'Brahmanbaria',
                'chandpur'=>'Chandpur',
                'chittagong'=>'Chittagong',
                'comilla'=>'Comilla',
                'cox-bazar'=>'Cox&rsquo;s Bazar',
                'feni'=>'Feni',
                'khagrachhari'=>'Khagrachhari',
                'lakshmipur'=>'Lakshmipur',
                'noakhali'=>'Noakhali',
                'rangamati'=>'Rangamati',
                'dhaka'=>'Dhaka',
                'faridpur'=>'Faridpur',
                'gazipur'=>'Gazipur',
                'gopalganj'=>'Gopalganj',
                'kishoreganj'=>'Kishoreganj',
                'madaripur'=>'Madaripur',
                'manikganj'=>'Manikganj',
                'munshiganj'=>'Munshiganj',
                'narayanganj'=>'Narayanganj',
                'narsingdi'=>'Narsingdi',
                'rajbari'=>'Rajbari',
                'shariatpur'=>'Shariatpur',
                'tangail'=>'Tangail',
                'bagerhat'=>'Bagerhat',
                'chuadanga'=>'Chuadanga',
                'jessore'=>'Jessore',
                'jhenaidah'=>'Jhenaidah',
                'khulna'=>'Khulna',
                'kushtia'=>'Kushtia',
                'magura'=>'Magura',
                'meherpur'=>'Meherpur',
                'narail'=>'Narail',
                'satkhira'=>'Satkhira',
                'jamalpur'=>'Jamalpur',
                'mymensingh'=>'Mymensingh',
                'netrakona'=>'Netrakona',
                'sherpur'=>'Sherpur',
                'joypurhat'=>'Joypurhat',
                'naogaon'=>'Naogaon',
                'natore'=>'Natore',
                'chapainawabganj'=>'Chapainawabganj',
                'pabna'=>'Pabna',
                'rajshahi'=>'Rajshahi',
                'sirajganj'=>'Sirajganj',
                'dinajpur'=>'Dinajpur',
                'gaibandha'=>'Gaibandha',
                'kurigram'=>'Kurigram',
                'lalmonirhat'=>'Lalmonirhat',
                'nilphamari'=>'Nilphamari',
                'panchagarh'=>'Panchagarh',
                'rangpur'=>'Rangpur',
                'thakurgaon'=>'Thakurgaon',
                'habiganj'=>'Habiganj',
                'moulvibazar'=>'Moulvibazar',
                'sunamganj'=>'Sunamganj',
                'sylhet'=>'Sylhet'
                ], 'dhaka', ['class'=>'form-control select2', 'placeholder'=>'District-Choose from list', 'style'=>'width: 100%;']) !!}
            </div>
            <div class="col-md-6">
                {!! Form::text('permanent_zip', null, ['class'=>'form-control', 'placeholder'=>'Post Code']) !!}
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-6">
            {!! Form::label('attachment', 'SCAN COPY OF PASSPORT BIO-PAGE OR BOTH SIDES OF NID') !!}
            {!! Form::text('attachment', null,['class'=>'form-control']) !!}
        </div>
        <div class="col-md-6">
            {!! Form::label('photo', 'UPLOAD RECENTLY TAKEN PORTRAIT PHOTO') !!}
            {!! Form::text('photo', null, ['class'=>'form-control']) !!}
        </div>
    </div>
</fieldset>

<fieldset>
    <div class="divider"></div>
    <div class="form-group">
        <div class="col-md-12">
            {!! Form::submit('Submit', ['class'=>'btn-success']) !!}
        </div>
    </div>
</fieldset>
{!! FOrm::close() !!}