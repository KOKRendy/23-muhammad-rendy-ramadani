import 'package:flutter/material.dart';
import 'package:travelappui/models/placesModel.dart';

class RESTAPI {
  List<PlaceModel> dummyFeatured = [
    PlaceModel(
        placeTitle: "Gaun Ratu",
        description:
            "Enjoy your winter vacation with warmth and amazing sightseeing on the mountains. Enjoy the best experience with us!",
        duration: 5,
        imgUrl: "assets/image/pic1.jpg",
        locationShort: "Honshu, Japan",
        rateperpackage: 400.0,
        rating: 4.5),
    PlaceModel(
        placeTitle: "Transmigasi Aira",
        description:
            "Enjoy your winter vacation with warmth and amazing sightseeing on the mountains. Enjoy the best experience with us!",
        duration: 6,
        imgUrl: "assets/image/pic2.jpg",
        locationShort: "Ladakh, India",
        rateperpackage: 350.0,
        rating: 4.5),
    PlaceModel(
        placeTitle: "Kemeja Pria Elegan",
        description:
            "Enjoy your winter vacation with warmth and amazing sightseeing on the mountains. Enjoy the best experience with us!",
        duration: 7,
        imgUrl: "assets/image/pic3.jpg",
        locationShort: "Honshu, Japan",
        rateperpackage: 250.0,
        rating: 3.8),
    PlaceModel(
        placeTitle: "Modern Hanbok Korean",
        description:
            "Enjoy your winter vacation with warmth and amazing sightseeing on the mountains. Enjoy the best experience with us!",
        duration: 5,
        imgUrl: "assets/image/pic4.jpg",
        locationShort: "Honshu, Japan",
        rateperpackage: 300.0,
        rating: 4.0)
  ];

  List<PlaceModel> dummyAllPlaces = [
    PlaceModel(
        placeTitle: "Transmigasi Aira",
        description:
            "Enjoy your winter vacation with warmth and amazing sightseeing on the mountains. Enjoy the best experience with us!",
        duration: 5,
        imgUrl: "assets/image/pic2.jpg",
        locationShort: "Honshu, Japan",
        rateperpackage: 400.0,
        rating: 4.5),
    PlaceModel(
        placeTitle: "Kemeja Pria Elegan",
        description:
            "Enjoy your winter vacation with warmth and amazing sightseeing on the mountains. Enjoy the best experience with us!",
        duration: 6,
        imgUrl: "assets/image/pic3.jpg",
        locationShort: "Ladakh, India",
        rateperpackage: 350.0,
        rating: 4.5),
    PlaceModel(
        placeTitle: "Gaun Ratu",
        description:
            "Enjoy your winter vacation with warmth and amazing sightseeing on the mountains. Enjoy the best experience with us!",
        duration: 7,
        imgUrl: "assets/image/pic1.jpg",
        locationShort: "Honshu, Japan",
        rateperpackage: 250.0,
        rating: 3.8),
    PlaceModel(
        placeTitle: "Modern Hanbok Korean",
        description:
            "Enjoy your winter vacation with warmth and amazing sightseeing on the mountains. Enjoy the best experience with us!",
        duration: 5,
        imgUrl: "assets/image/pic4.jpg",
        locationShort: "Honshu, Japan",
        rateperpackage: 300.0,
        rating: 4.0),
    PlaceModel(
        placeTitle: "Transmigrasi Aira",
        description:
            "Enjoy your winter vacation with warmth and amazing sightseeing on the mountains. Enjoy the best experience with us!",
        duration: 5,
        imgUrl: "assets/image/pic2.jpg",
        locationShort: "Honshu, Japan",
        rateperpackage: 400.0,
        rating: 4.5),
    PlaceModel(
        placeTitle: "Kemeja Pria Elegan",
        description:
            "Enjoy your winter vacation with warmth and amazing sightseeing on the mountains. Enjoy the best experience with us!",
        duration: 6,
        imgUrl: "assets/image/pic3.jpg",
        locationShort: "Ladakh, India",
        rateperpackage: 350.0,
        rating: 4.5),
    PlaceModel(
        placeTitle: "Gaun Ratu",
        description:
            "Enjoy your winter vacation with warmth and amazing sightseeing on the mountains. Enjoy the best experience with us!",
        duration: 7,
        imgUrl: "assets/image/pic1.jpg",
        locationShort: "Honshu, Japan",
        rateperpackage: 250.0,
        rating: 3.8),
    PlaceModel(
        placeTitle: "Modern Habok Korean",
        description:
            "Enjoy your winter vacation with warmth and amazing sightseeing on the mountains. Enjoy the best experience with us!",
        duration: 5,
        imgUrl: "assets/image/pic4.jpg",
        locationShort: "Honshu, Japan",
        rateperpackage: 300.0,
        rating: 4.0),
    PlaceModel(
        placeTitle: "Transmigrasi Aira",
        description:
            "Enjoy your winter vacation with warmth and amazing sightseeing on the mountains. Enjoy the best experience with us!",
        duration: 5,
        imgUrl: "assets/image/pic2.jpg",
        locationShort: "Honshu, Japan",
        rateperpackage: 400.0,
        rating: 4.5),
    PlaceModel(
        placeTitle: "Kemeja Pria Elegan",
        description:
            "Enjoy your winter vacation with warmth and amazing sightseeing on the mountains. Enjoy the best experience with us!",
        duration: 6,
        imgUrl: "assets/image/pic3.jpg",
        locationShort: "Ladakh, India",
        rateperpackage: 350.0,
        rating: 4.5),
    PlaceModel(
        placeTitle: "Gaun Ratu",
        description:
            "Enjoy your winter vacation with warmth and amazing sightseeing on the mountains. Enjoy the best experience with us!",
        duration: 7,
        imgUrl: "assets/image/pic1.jpg",
        locationShort: "Honshu, Japan",
        rateperpackage: 250.0,
        rating: 3.8),
    PlaceModel(
        placeTitle: "Modern Hanbok Korean",
        description:
            "Enjoy your winter vacation with warmth and amazing sightseeing on the mountains. Enjoy the best experience with us!",
        duration: 5,
        imgUrl: "assets/image/pic4.jpg",
        locationShort: "Honshu, Japan",
        rateperpackage: 300.0,
        rating: 4.0)
  ];

  Future<List<PlaceModel>> getFeaturedPlaces() async {
    await Future.delayed(Duration(milliseconds: 750));
    return dummyFeatured;
  }

  Future<List<PlaceModel>> getAllPlaces() async {
    await Future.delayed(Duration(milliseconds: 950));
    return dummyAllPlaces;
  }
}
