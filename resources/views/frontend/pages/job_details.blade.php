@extends('layouts.app')

@section('title', 'Job Description')

@section('front_content')
<div class="container mt-5">
    <h2 class="fw-bold">Overview</h2>
    <p class="text-muted">
        Vivasoft, a leading software outsourcing company, is seeking a talented Senior Software Engineer L1 to join our dynamic team. 
        The candidate will possess advanced knowledge of Java programming, extensive experience with Java frameworks, and a strong understanding of web technologies. 
        You will work closely with our clients to understand their needs and translate those into software solutions. 
        Additionally, you will mentor and guide junior developers on the team, ensuring that all code is of high quality.
    </p>

    <h3 class="fw-bold mt-4">Responsibilities:</h3>
    <ul class="list-group list-group-flush">
        <li class="list-group-item">Lead the design, development, and maintenance of scalable, reliable, and robust Java applications.</li>
        <li class="list-group-item">Utilize your mastery of Java internals (JVM, GC, performance tuning) to optimize code.</li>
        <li class="list-group-item">Develop and maintain web applications using Java frameworks such as Spring (Boot, MVC, Security) and Hibernate.</li>
        <li class="list-group-item">Collaborate with cross-functional teams to design and implement RESTful and SOAP web services.</li>
        <li class="list-group-item">Manage database design and optimization for both relational (PostgreSQL, MySQL) and NoSQL databases (Cassandra).</li>
        <li class="list-group-item">Implement DevOps practices, including CI/CD pipelines, containerization, and Kubernetes orchestration.</li>
    </ul>
</div>

<div class="container mt-5">
    <h3 class="fw-bold">Requirements:</h3>
    <ul class="list-group list-group-flush">
        <li class="list-group-item">3–5 years of professional Java development experience.</li>
        <li class="list-group-item">Proficiency in Java programming, including Java SE and Java EE, with a strong understanding of Java internals, Collection, and performance tuning.</li>
        <li class="list-group-item">Extensive experience with popular Java frameworks and libraries like Spring (Boot, MVC, Security), Hibernate, and project needs.</li>
        <li class="list-group-item">Proficiency in database design and management, with experience in both relational (PostgreSQL, MySQL) and NoSQL (Cassandra) databases (depending on project requirements).</li>
        <li class="list-group-item">Hands-on experience with RESTful and SOAP web services development, including an understanding of security best practices (OAuth, JWT, etc.).</li>
        <li class="list-group-item">Proficient in DevOps methodologies, including CI/CD pipelines and containerization technologies.</li>
        <li class="list-group-item">Expertise in testing methodologies and frameworks (JUnit, TestNG, Mockito) for unit, integration, and system testing.</li>
        <li class="list-group-item">Strong understanding of secure coding practices and the ability to implement security measures in applications.</li>
        <li class="list-group-item">Ability to design scalable, reliable, and efficient software architectures, understanding design patterns and event-driven architecture.</li>
    </ul>
   
    <h3 class="fw-bold mt-4">What we offer:</h3>
    
    <ul class="list-group list-group-flush">
        <li class="list-group-item">Good working environment.</li>
        <li class="list-group-item">Weekly holiday: 2 Days</li>
    </ul>
</div>

<div class="container mt-5">
    <div class="card">
        <div class="card-header bg-primary text-white">
            <h3 class="card-title">Job Information</h3>
        </div>
        <div class="card-body">
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><strong>Location:</strong> [Location]</li>
                <li class="list-group-item"><strong>Deadline:</strong> 08-31-2024</li>
                <li class="list-group-item"><strong>Position:</strong> Senior Software Engineer L1</li>
                <li class="list-group-item"><strong>Salary:</strong> 90k-120k</li>
            </ul>
        </div>
        

      
    </div>
      <!-- Apply Now Button -->
      <a href="#" class="apply-btn">Apply Now</a>
      {{-- <button class="btn apply-btn mt-4">Apply Now</button> --}}
</div>

<style>
    .apply-btn {
    background: linear-gradient(45deg, #007bff, #0056b3); /* সুন্দর গ্রেডিয়েন্ট ব্যাকগ্রাউন্ড */
    color: white;
    font-size: 18px;
    font-weight: bold;
    padding: 12px 25px;
    border: none;
    width: 15%;
    margin-left: 41%;
    border-radius: 8px;
    transition: all 0.3s ease-in-out;
    /* box-shadow: 0px 4px 10px rgba(178, 253, 5, 0.2); */
}



</style>
@endsection