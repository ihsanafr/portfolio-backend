{{-- @extends('admin.layouts.app')

@section('content')
<div class="container">
    <div class="row mb-4">
        <div class="col-md-12">
            <h1>Edit Certificate</h1>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('admin.certificates.update', $certificate->id) }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="name" class="form-label">Certificate Name</label>
                    <input type="text" class="form-control" id="name" name="name"
                        value="{{ old('name', $certificate->name) }}" required>
                </div>

                <div class="mb-3">
                    <label for="image" class="form-label">Certificate Image</label>
                    @if($certificate->image)
                    <div class="mb-2">
                        <img src="{{ asset($certificate->image) }}" alt="{{ $certificate->name }}" width="100">
                    </div>
                    @endif
                    <input type="file" class="form-control" id="image" name="image">
                </div>

                <div class="mb-3">
                    <label for="date" class="form-label">Date</label>
                    <input type="text" class="form-control" id="date" name="date"
                        value="{{ old('date', $certificate->date) }}" required">
                </div>

                <div class="mb-3">
                    <label for="organizer" class="form-label">Organizer</label>
                    <input type="text" class="form-control" id="organizer" name="organizer"
                        value="{{ old('organizer', $certificate->organizer) }}" required>
                </div>

                <div class="mb-3">
                    <label for="certificate_link" class="form-label">Certificate Link (URL)</label>
                    <input type="url" class="form-control" id="certificate_link" name="certificate_link"
                        value="{{ old('certificate_link', $certificate->certificate_link) }}">
                </div>

                <button type="submit" class="btn btn-primary">Update</button>
                <a href="{{ route('admin.certificates.index') }}" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>
</div>
@endsection --}}

{{-- ================================================== --}}


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashpro by BuildWithAngga</title>
    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.cdnfonts.com/css/general-sans" rel="stylesheet">

</head>

<body class="font-['General Sans'] bg-[#f5f5f5]">





    <div class="flex flex-row justify-start">
        @include('admin.layouts.sidebar')
        <div class="flex-auto w-screen lg:pl-[250px]">
            @include('admin.layouts.header')



            <section class="sales pt-10 px-7 grid grid-cols-1 md:grid-cols-1 gap-x-7 gap-y-7">
                <a href="{{ route('admin.certificates.index') }}"
                    class="text-blue-500 font-semibold hover:text-blue-700 transform transition duration-500">Kembali</a>
                <div class="flex-col bg-white rounded-2xl p-5 ">
                    <p class="font-bold">Edit Certificates</p>
                    <div class="h-10"></div>
                    <form action="{{ route('admin.certificates.update', $certificate->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3 flex-col flex">
                            <label for="name" class="form-label">Certificates Name</label>
                            <input type="text" class=" bg-gray-50 rounded-lg p-2 border border-gray-200 form-control"
                                id="name" name="name" value="{{ old('name', $certificate->name) }}" required">
                        </div>
                        <div class="mb-3 flex-col flex">
                            <label for="icon" class="form-label">Certificates Image</label>
                            @if($certificate->image)
                            <div class="mb-2">
                                <img src="{{ asset($certificate->image) }}" alt="{{ $certificate->name }}" width="100">
                            </div>
                            @endif
                            <input type="file"
                                class=" form-control bg-gray-50 rounded-lg form-control border border-gray-200 p-2"
                                id="image" name="image">
                            <div class="form-text">Upload an icon image (max 2MB)</div>
                        </div>
                        <div class="mb-3 flex-col flex">
                            <label for="name" class="form-label">Date Period</label>
                            <input type="text"
                                class="form-control bg-gray-50 rounded-lg p-2 border border-gray-200 form-control"
                                id="date" name="date" value="{{ old('date', $certificate->date) }}" >

                        </div>
                        <div class="mb-3 flex-col flex">
                            <label for="name" class="form-label">Organizer</label>
                            <input type="text"
                                class="form-control bg-gray-50 rounded-lg p-2 border border-gray-200 form-control"
                                id="organizer" name="organizer" value="{{ old('organizer', $certificate->organizer) }}" >

                        </div>
                        <div class="mb-3 flex-col flex">
                            <label for="name" class="form-label">Certificate Link</label>
                            <input type="url"
                                class=" form-control bg-gray-50 rounded-lg p-2 border border-gray-200 form-control"
                                id="certificate_link" name="certificate_link" value="{{ old('certificate_link', $certificate->certificate_link) }}">

                        </div>






                        <button type="submit">
                            <div
                                class="text-white bg-blue-500 hover:bg-blue-600 px-4 py-2 rounded-lg transition transform duration-500">
                                Update
                            </div>
                        </button>
                    </form>
                </div>
            </section>



        </div>
    </div>

</body>

</html>
