@extends('layouts.app')

@section('title'. 'FAQ')

@section('front_content')

        <!-- Inner Banner -->
        <div class="inner-banner">
            <div class="container">
                <div class="inner-title text-center">
                    <h3>FAQ</h3>
                    <ul>
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>
                            <i class='bx bx-chevrons-right'></i>
                        </li>
                        <li>FAQ</li>
                    </ul>
                </div>
            </div>
            <div class="inner-shape">
                <img src="{{ asset('/') }}frontend/assets/images/shape/inner-shape.png" alt="Images">
            </div>
        </div>
        <!-- Inner Banner End -->

<!-- FAQ Area -->
<div class="faq-area pt-100 pb-70">
    <div class="container">
        <div class="section-title text-center">
            <h2>Frequently Asked Questions</h2>
            <p class="margin-auto">We are the agency who always gives you a priority on the free of question and you can easily make a question on the bunch.</p>
        </div>
        <div class="row pt-45">
            <div class="col-lg-6">
                <div class="faq-content">
                    <div class="faq-accordion">
                        <ul class="accordion">
                            @foreach($faqs as $faq)
                                <li class="accordion-item">
                                    <a class="accordion-title" href="javascript:void(0)" onclick="toggleAccordion(this)">
                                        <i class="bx {{ $faq->is_active ? 'bx-minus' : 'bx-plus' }}"></i>
                                        {{ $faq->question }}
                                    </a>
                                    <div class="accordion-content {{ $faq->is_active ? 'show' : '' }}">
                                        <p> 
                                            {{ $faq->answer }}
                                        </p>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- FAQ Toggle style --}}
            <style>
                .accordion-content {
                display: none;
                transition: all 0.3s ease;
            }

            .accordion-content.show {
                display: block;
            }

            </style>

{{-- FAQ Toggle script --}}
    <script>
        function toggleAccordion(element) {
            let accordionItem = element.closest('.accordion-item'); 
            let accordionContent = accordionItem.querySelector('.accordion-content');  
            let icon = accordionItem.querySelector('i');  

            accordionContent.classList.toggle('show');
            
            if (accordionContent.classList.contains('show')) {
                icon.classList.remove('bx-plus');
                icon.classList.add('bx-minus');
            } else {
                icon.classList.remove('bx-minus');
                icon.classList.add('bx-plus');
            }
        }

        </script>
<!-- FAQ Area End -->

@endsection