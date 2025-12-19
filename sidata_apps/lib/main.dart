import 'package:flutter/material.dart';
import 'package:sidata_apps/explore.dart';

import 'package:sidata_apps/login_page.dart';



void main() {
  runApp(const MyApp());
}

class MyApp extends StatelessWidget {
  const MyApp({super.key});

  @override
  Widget build(BuildContext context) {
    return MaterialApp(
      title: 'Jurnalku',
      debugShowCheckedModeBanner: false,
      home: Explore(),
    );
  }
}
