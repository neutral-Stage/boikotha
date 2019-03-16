@extends('front.layouts.master')

@section('content')
    <div class="main-body section-gap">

        <div class="container box_1170">

            <div class="row">
                <div class="col-md-10 mx-auto">
                    @if(session('lang') == 'eng')
                    <p>
                    Hello there! Welcome to the first children’s book review platform in Bangladesh! BoiKotha is an initiative to promote reading as entertainment for children. Our vision is for all children in Bangladesh to have access to high quality books. We want to create a platform for Bangladeshi publishers to promote their books, for parents and teachers to find the right books for young readers and for young readers to be able to engage and enjoy reading. BoiKotha is a small attempt to promote locally relevant characters and stories that encourage young readers of Bangladesh to be imaginative, creative and communicative. On this website, you will find reviews of latest books published in Bangladesh. Please let us know if you have any suggestions or feedback.
                    </p>

                    @elseif(session('lang') == 'ban')
                    <p>স্বাগতম বইকথা বাংলাদেশের প্রথম ছোটোদের বই নিয়ে আলোচনা করার ওয়েবসাইট! আমাদের এই উদ্যোগ শুধুমাত্র ছোটদের বই পড়ার মাধ্যমে আনন্দ দেয়ার জন্য। আমাদের স্বপ্ন বাংলাদেশের সব ছেলে মেয়ের উন্নত মানের গল্পের বই থাকবে। আমরা এমন একটি জায়গা তৈরি করতে চাই, যেখানে বাংলাদেশি বই প্রচার পাবে, অভিভাবক এবং শিক্ষকরা তাদের ছেলে মেয়েদের জন্য সঠিক বই খুঁজে পাবেন, আর ক্ষুদে পাঠকরা বই নিয়ে নানান রকম মজার আলাপ আলোচনা করতে পারবে। আমাদের দেশীয় গল্প এবং চরিত্রের মাধ্যমে ক্ষুদে পাঠকরা যেন আরও কল্পনাপ্রবণ এবং সৃজনশীল হতে পারে, তাদের  ভালো লাগা না লাগার কথা গুলো আরও সহজে প্রকাশ করতে পারে। এই  ওয়েবসাইট এ তোমরা বাংলাদেশে প্রকাশিত নতুন নতুন বই নিয়ে বড় এবং ছোটদের মন্তব্য পাবে। আমাদের জন্য পরামর্শ অথবা মতামত থাকলে অবশ্যই জানাবে।</p>
                    @else
                    <p>
                        Hello there! Welcome to the first children’s book review platform in Bangladesh! BoiKotha is an initiative to promote reading as entertainment for children. Our vision is for all children in Bangladesh to have access to high quality books. We want to create a platform for Bangladeshi publishers to promote their books, for parents and teachers to find the right books for young readers and for young readers to be able to engage and enjoy reading. BoiKotha is a small attempt to promote locally relevant characters and stories that encourage young readers of Bangladesh to be imaginative, creative and communicative. On this website, you will find reviews of latest books published in Bangladesh. Please let us know if you have any suggestions or feedback.
                    </p>
                    @endif

                </div>
            </div>
        </div>
    </div>
@endsection